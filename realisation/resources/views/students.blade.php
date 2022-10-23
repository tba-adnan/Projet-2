<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<tbody id="tbody"> 
        @foreach ($name as $value)  
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
        </tr>
        @endforeach
    </tbody>
</body>
</html>