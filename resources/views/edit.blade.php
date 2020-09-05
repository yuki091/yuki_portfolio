<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCloset</title>
</head>
<body>
    <div class="header flex">
        <div class="header-title">
          <p>MyCloset</p>
        </div>
        <div class="header-right flex">
          <a href="/home">Home</a>
        </div>
    </div>
    <form action="/home/{{$cloth->id}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('PUT')
        <input type="file" name="iamge"><br>
        <label>カテゴリー</label>
        <input type="text" name="category_name" value="{{$cloth->category_name}}"><br>
        <label>ブランド</label>
        <input type="text" name="brand_name" value="{{$cloth->brand_name}}"><br>
        <label>メモ</label>
        <input type="text" name="memo" value="{{$cloth->memo}}"><br>
        <button type="submit">更新</button>
    </form>
</body>
</html>
<style>
*{
 margin: 0;
 padding: 0;
 font-family: Hiragino Maru Gothic ProN;
}
.flex {
display: flex;
justify-content: space-between;
}
.header {
  background-color: #333;
  height: 70px;
  font-size: 30px;
  color: #EEEEEE;
}
.header-title p {
  line-height: 70px;
  font-size: 30px;
  margin-left: 30px;
}
.header-right a {
  line-height: 70px;
  float: right;
  margin-right: 30px;
  cursor: pointer;
  font-size: 18px;
  color: white;
}
form { 
  margin: 0 auto;
  margin-top: 100px;
  width: 400px;
  height: 400px;
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}
label {
  display: inline-block;
  width: 90px;
  text-align: center;
}
input {
margin-top: 30px;
width: 60%;
padding: 10px;
color: black;
}
button {
width: 100px;
text-align: center;
padding: 8px 0 10px;
cursor: pointer;
margin-top: 30px;
margin-left: 140px;
}
</style>
