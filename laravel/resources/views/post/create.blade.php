<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>create画面</h1>
<form action="{{route('post.store')}}" method="post">
    @csrf
    <label for="title">タイトル</label>
    <input id="title" name="title" type="text">
    <label for="text">内容</label>
    <input id="text" name="text" type="text">
    <label for="password">ユーザー選択</label>
    <select name="user_id" id="user">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>

    <button>送信する</button>
</form>
</body>
</html>
