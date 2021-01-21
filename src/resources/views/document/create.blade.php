<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>

<body>

<form action="/files" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Dateiname">
    <input type="text" name="description" placeholder="Beschreibung">
    <input type="file" name="file">
    <input type="submit" value="Hochladen">
</form>
</body>
</html>