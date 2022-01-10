<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  @extends('layout')

  @section('content')
  <form method="POST" action="{{ route('contact.confirm') }}">
    @csrf

    <label>お名前</label>
    <input name="email" value="{{ old('email') }}" type="text">
    @if ($errors->has('email'))
    <p class="error-message">{{ $errors->first('email') }}</p>
    @endif

    <label>性別</label>
    <input name="email" value="{{ old('email') }}" type="text">
    @if ($errors->has('email'))
    <p class="error-message">{{ $errors->first('email') }}</p>
    @endif

    <label>メールアドレス</label>
    <input name="email" value="{{ old('email') }}" type="text">
    @if ($errors->has('email'))
    <p class="error-message">{{ $errors->first('email') }}</p>
    @endif

    <label>タイトル</label>
    <input name="title" value="{{ old('title') }}" type="text">
    @if ($errors->has('title'))
    <p class="error-message">{{ $errors->first('title') }}</p>
    @endif


    <label>お問い合わせ内容</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
    <p class="error-message">{{ $errors->first('body') }}</p>
    @endif

    <button type="submit">
      入力内容確認
    </button>
  </form>
  @endsection
</body>

</html>