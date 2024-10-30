<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Notes</h1>
    <ul>
    <a href="/notes/create">Create Note</a>
        @foreach ($allNotes as $note)
           <li>
                <h2>Title: {{ $note->title }}</h2>
                <h2>Content: {{ $note->content }}</h2>
                <a href="/notes/{{ $note->id }}">Show Note</a>
           </li> 
        @endforeach
    </ul>
</body>
</html>