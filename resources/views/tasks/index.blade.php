<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>tasks index</title>
</head>

<body>
    <h1>タスク一覧</h1>

    <ul class="task-index">
        @foreach ($tasks as $task)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></li>
        @endforeachgit

        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('マジで？')){return false};">
        </form>

    </ul>

    <hr>

    <h1>新規論文投稿</h1>
    <p>タイトル</p>
    <p>内容</p>
</body>

</html>
