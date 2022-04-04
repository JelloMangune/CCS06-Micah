<html>
    <head>
    <title>Web Reader</title>
    </head>
<body>
    <h1>{{ $bible_name }}</h1>
    <h2>{{ $bible_version }}</h2>

@for($i = 1; $i <= $chapters; $i++)
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
@endfor
<hr>

<pre>
@include("chapter" . $chapter_number)
</pre>

</body>
</html>