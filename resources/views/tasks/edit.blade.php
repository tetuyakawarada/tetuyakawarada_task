<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>task edit</title>
</head>

<body>
    <h1>投稿論文編集</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" value="{{ old('title', $task->title) }}">

        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body">{{ old('body', $task->body) }}</textarea>
        </p>

        <div class="button-group">

            <input type="submit" value="更新">

            <button onclick="location.href='/tasks/{{ $task->id }}'">詳細に戻る</button>

            {{-- <li><a class="task-index" href="/tasks/{{ $task->id }}">{{ $task->title }}</a></li>
        <a href="/tasks/{{ $task->id }}">戻る</a> --}}

        </div>







    </form>
</body>

</html>
