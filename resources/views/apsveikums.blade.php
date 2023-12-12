<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apsveikums</title>
</head>
<body>
    <h1>Apsveicu Ziemassvētkos!</h1>
    <ul>
        @foreach ($classMates as $mate)
        <li>{{$mate->name}}</li>
        @endforeach
    </ul>
</body>
</html>