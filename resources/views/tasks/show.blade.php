<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks show</title>
</head>

<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】<br>{!! nl2br(e($task->title)) !!}</p>
    <p>【内容】<br>{!! nl2br(e($task->body)) !!}</p>
</body>

</html>
