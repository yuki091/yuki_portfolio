<?php

namespace App\Http\Controllers;

use App\User;
use App\Cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
   
class ClothController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $user_id = Auth::id();
        $clothes = Cloth::where('user_id',$user_id)->get();

        return view('home', compact('clothes','user_id'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
   
        $clothes = new Cloth;
        $uploadImg = $clothes->image = $request->file('image');
        $clothes->category_name = $request->category_name;
        $clothes->brand_name = $request->brand_name;
        $clothes->memo = $request->memo;
        $clothes->user_id = $request->user()->id;
        $path = Storage::disk('s3')->putFile('/', $uploadImg, 'public');
        $clothes->image = Storage::disk('s3')->url($path);
        $clothes->save();

        return redirect('/home');
    }
    public function show($id)
    {
        $cloth = Cloth::find($id);
        return view('show',['cloth'=>$cloth]);
    }
    public function edit($id)
    {
        $cloth = Cloth::find($id);
        return view('edit',['cloth'=>$cloth]);
    }
    public function update(Request $request, $id)
    {
        $cloth = Cloth::find($id);
        // $iamge = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public', $image);
        // $cloth->user_id = $request->user()->id;
        // $cloth->image = $image;
        
        $image = $request->file('image');
        $cloth->category_name = $request->category_name;
        $cloth->brand_name = $request->brand_name;
        $cloth->memo = $request->memo;
        $path = Storage::disk('s3')->putFile('/', $image, 'public');
        $cloth->image = Storage::disk('s3')->url($path);
        $cloth->save();

        return redirect("/home");
    }
    public function destroy($id)
    {
        $cloth=Cloth::find($id);
        $cloth->delete();
        
        return redirect('home');
    }
}
