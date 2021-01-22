<!DOCTYPE html>
<html>


<head>
    <title>view</title>
</head>
<body>


<table border="1">
    <tr>
    <th>Sl</th>
    <th>Titel</th>
    <th>Beschreibung</th>
    <th>Vorschau</th>
    <th>Download</th>
    </tr>
   @foreach($file as $key=$data)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td> <a href="/files/{{$data->id}}">Vorschau</a> </td>
        <td> <a href="/files/download/{{$data->file}">Download</a> </td>
    </tr>
    @endforeach
</table>

</body>

</html>
