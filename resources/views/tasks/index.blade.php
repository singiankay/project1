<!DOCTYPE html>
<html>
<head>
    <title>Laravel Project 1</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
            <li><a href='tasks/{{ $task->id }}'>{{ $task->title }}</a></li>
        @endforeach
    </ul>
    
</body>
</html>