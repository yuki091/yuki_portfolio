<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyCloset</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
          <!-- <img src="{{ $cloth->image }}" width="350px" height="350px"> -->
          <img src="data:image/png;base64,{{ $cloth->image }}" width="350px" height="350px">
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
            <input type="submit" class="button -compact" value="削除">
            <!-- <a type="submit" class="button -compact">削除</a> -->
          </p>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</body>
</html>

