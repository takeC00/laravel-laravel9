<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>つぶやきアプリ</title>
</head>
<body>
  <h1>つぶやきを編集する</h1>
  <div>
    <a href="{{ route('tweet.index') }}">戻る</a>
    <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" methood="post">
      @method('PUT')
      @csrf
      <label for="tweet-content">つぶやき</label>
      <span>140字まで</span>
      <textarea id="tweet-content" type="text" name="tweet"
      placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
      @error('tweet')
      <p style="color:red;">{{ $messsage }}</p>
      @enderror
      <button type="submit">編集</button>
    </form>
  </div>
</body>
</html>
