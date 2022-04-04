<html>
    <head>
        <title>Web Reader</title>
    </head>
    <body>
        <h1>{{ $bible_name}}</h1>
        <h2>{{ $bible_version }}</h2>
        @for($i=1; $i <= $chapters;$i++)
        <h3><a href="/chapter/{{ $i }}">Chapter {{$i}} </a></h3>
        @endfor
        <h3><a href="/all-chapters">Read All Chapters</h3>
    </body>
</html>