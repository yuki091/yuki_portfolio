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
  <div class="l-wrapper">
    <article class="card">  
      <figure class="card__thumbnail">
        <img src="{{ asset('storage/'.$cloth->cloth_filename) }}" width="350px" height="350px">
      </figure>
      <div class="card__body">
        <p class="card__text">カテゴリー：{{ $cloth->category_name }}</p>
        <p class="card__text">ブランド  ：{{ $cloth->brand_name }}</p>
        <p class="card__text">メモ      ：{{ $cloth->memo}}</p>
        <p class="card__text">作成日    ：{{ $cloth->created_at }}</p>
        <p class="card__text"><a href="/home/{{$cloth->id}}/edit" class="button -compact">編集</a></p>
      </div>
    </article>
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
.l-wrapper {
  width: 350px;
  text-align: center;
  margin: 0 auto;
  margin-top: 50px;
}
.card {
  background-color: #fff;
  box-shadow: 0 0 8px rgba(0, 0, 0, .16);
  color: #212121;
  text-decoration: none;
  text-align: center;
}
.card__thumbnail {
  margin: 0;
  order: 0;
}
.card__image {
  width: 100%;
}
.card__body {
  padding: 1rem;
}
.card__text {
  font-size: 1rem;
}
.card__text + .card__text {
  margin-top: .5rem;
}
.card__footer {
  padding: 1rem;
  border-top: 1px solid #ddd;
}
.button {
  display: inline-block;
  text-decoration: none;
  transition: background-color .3s ease-in-out;
  cursor: pointer;
}
.button.-compact {
  padding: .5rem 1rem;
  border-radius: .25rem;
  background-color: #26a69a;
  color: #fff;
  font-weight: bold;
  
}
.button.-compact:hover,
.button.-compact:focus {
  background-color: #80cbc4;
}
form input{
  border-top: 1px solid #ddd;
  padding: 1rem;
}
</style>