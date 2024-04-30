<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>bike</title>
</head>
<body>
<h1>table bikes</h1>
<ul>
    @foreach($bikes as $bike)
    <li>{{$Bike}}</li>
    @endforeach
</ul>
</body>
</html>
