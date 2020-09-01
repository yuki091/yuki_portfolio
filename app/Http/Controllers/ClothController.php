<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\User;
use App\Cloth;
use Illuminate\Support\Facades\Auth;
   
class ClothController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index']);
    // }

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
         $image = $request->file('image')->getClientOriginalName();;
         $request->file('image')->storeAs('public', $image);
        // $request->file('filename')->storeAs('public', $filename);
        // $clothes->cloth_filename = $filename;
        // $image = base64_encode(file_get_contents($request->image->getRealPath()));
        $clothes = new Cloth;
        // $clothes->image = base64_encode(file_get_contents($request->image));
        $clothes->category_name = $request->category_name;
        $clothes->brand_name = $request->brand_name;
        $clothes->memo = $request->memo;
        $clothes->image = $image;
        $clothes->user_id = $request->user()->id;
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
        $filename = $request->file('filename')->getClientOriginalName();;
        // $image = base64_encode(file_get_contents($request->image->getRealPath()));
        $request->file('image')->storeAs('public', $image);
        $cloth->category_name = $request->category_name;
        $cloth->brand_name = $request->brand_name;
        $cloth->memo = $request->memo;
        $cloth->image = $image;
        $cloth->save();

        return redirect("home");
    }
    public function destroy($id)
    {
        $cloth=Cloth::find($id);
        $cloth->delete();
        
        return redirect('home');
    }
}