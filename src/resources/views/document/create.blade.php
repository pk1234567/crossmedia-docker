<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>

<body>

<form action="/files" methode="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="Dateiname" placeholder="Dateiname">
    <input type="text" name="Beschreibung" placeholder="Beschreibung">
    <input type="file" name="file">
    <input type="submit" value="Hochladen">
</form>
</body>
</html>