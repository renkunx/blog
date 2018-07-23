<html>
<head></head>
<body>
<h1>about</h1>
<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
</body>
</html>