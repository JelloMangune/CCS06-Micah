<html>
    <head>
    <title>Web Reader</title>
    </head>
<body>
    <h1>{{ $bible_name }}</h1>
    <h2>{{ $bible_version }}</h2>

@for($i = 1; $i <= $chapters; $i++)
<h3>
    Chapter {{ $i }}
</h3>

<pre>
@include("chapter{$i}")
</pre>
@endfor
</body>
</html>