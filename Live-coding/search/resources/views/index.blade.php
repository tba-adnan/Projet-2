<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NAME</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($promotion as $value)
            <tr>
                <td >{{$value ->name}}</td>
            </tr>
            @empty
            
            @endforelse
        </tbody>
    </table>
    
</body>
</html>

