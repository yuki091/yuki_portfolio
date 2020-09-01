<!DOCTYPE html>
<html lang="ja">
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
        <a href="/user/signup">新規登録</a>
      </div>
  </div>
  <div class="title">
    <p>ログイン</p>
  </div>
  <div class="card">
    <form action="{{ route('user.signin') }}" method="post">
      <input placeholder="メールアドレス" type="text" id="email" name="email">
      <input placeholder="パスワード" type="password" id="password" name="password">
      <button type="submit">ログイン</button>
      {{ csrf_field() }}
    </form>
  </div>
</body>
</html>
<style scoped>
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
background: ;
border-radius: 5px;
padding: 20px;
box-shadow: 0 0 8px rgba(0, 0, 0, .16);
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
width: 100px;
text-align: center;
padding: 8px 0 10px;
background-color: #80cbc4;
border-radius: 25px;
cursor: pointer;
margin-top: 15px;
}
</style>