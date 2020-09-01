<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyCloset</title>
</head>
<body>
  <div>
    <div class="header flex">
      <div class="header-title">
        <p>MyCloset</p>
      </div>
      <div class="header-right flex">
        <a href="/home/create">アイテム登録</a>
      </div>
    </div>
  </div>
  @foreach ($clothes as $cloth)
  <div class="l-wrapper flex">
    <div class="card">
      <div class="card__header">
        <div class="card__image">
          <img src="{{ $cloth->image }}" width="350px" height="350px">
          <!-- <img src="data:image/png;base64,{{ $cloth->image }}" width="350px" height="350px"> -->
        </div>
      </div>
      <div class="card__body">
        <p class="card__text">カテゴリー：{{ $cloth->category_name }}</p>
        <p class="card__text">ブランド  ：{{ $cloth->brand_name }}</p>
        <p class="card__text">メモ      ：{{ $cloth->memo }}</p>
      </div>
      <div class="card__footer">
        <p class="card__button"><a href="/home/{{$cloth->id}}" class="button -compact">詳細</a></p>
        <p class="card__button"><a href="/home/{{$cloth->id}}/edit" class="button -compact">編集</a></p>
        <form action="/home/{{$cloth->id}}" method="post">
          {{ csrf_field() }}
          @method('DELETE')
          <p class="card__button">
            <!-- <input type="submit" class="button -compact" value="削除"> -->
            <a type="submit" class="button -compact">削除</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  @endforeach
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
  margin: 54px;
  width: 350px;
  float: left;
  display:flex;
  flex-wrap: wrap;
}
.card {
  background-color: #fff;
  box-shadow: 0 0 8px rgba(0, 0, 0, .16);
  color: #212121;
  text-decoration: none;
}
.card__header {
  display: flex;
  flex-wrap: wrap;
}
.card__image {
  margin: 0;
  order: 0;
}
.card__body {
  padding: 1rem;
}
.card__text {
  font-size: 1rem;
  margin-top: .5rem;
}
.card__footer {
  display: inline-flex;
  margin-bottom: 10px;
}
.button {
  display: inline-block;
  text-decoration: none;
  /* transition: background-color .3s ease-in-out; */
  cursor: pointer;
  margin-left: 38px;
  
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
/* form input{
  border-top: 1px solid #ddd;
  padding: 1rem;
  margin-top: .5rem;
  font-size: 1rem;
  font-weight: bold;
  padding: .5rem 1rem;
  text-decoration: none;
  transition: background-color .3s ease-in-out;
  cursor: pointer;
} */
@media screen and (max-width:480px)
{
.l-wrapper {
  width: 300px;
  text-align: center;
  margin: 0 auto;
}
.card {
  background-color: #fff;
  box-shadow: 0 0 8px rgba(0, 0, 0, .16);
  color: #212121;
  text-decoration: none;
  text-align: center;
}
}
</style>
