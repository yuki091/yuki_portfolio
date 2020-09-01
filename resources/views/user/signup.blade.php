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
      <a href="signin">ログイン</a>
    </div>
  </div>
  <div class="title">
    <p>新規登録</p>
  </div>
  <div class="card">
    <form action="{{ route('user.signup') }}" method="post">
      <input type="text" name="name" id="InputName" placeholder="ユーザーネーム" />
      <input type="email" name="email"  id="InputEmail" placeholder="メールアドレス" />
      <input type="password" name="password"  id="InputPassword" placeholder="パスワード" />
      <button type="submit">新規登録</button>
      {{ csrf_field() }}
    </form>
  </div>
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
.title p{
  text-align: center;
  margin-top: 70px;
  font-size: 22px;
}
.card {
margin: 70px auto;
width: 350px;
border-radius: 5px;
padding: 20px;
}
input {
margin-top: 15px;
width: 80%;
border-radius: 10px;
padding: 10px;
border: 1px solid black;
color: black;
}
form {  
  text-align: center;
}
button {
width: 90px;
text-align: center;
padding: 8px 0 10px;
color: #fff;
background-color:  #26a69a;
border-radius: 15px;
cursor: pointer;
margin-top: 15px;
}
</style>
