@if (session('status'))
<h1 style="color: rgb(121, 234, 121)">{{ session('status') }}</h1>
@endif
<a href="/create"><button>Ajouté</button></a>
<table>
    <thead>
        <tr>
            <th>id : </th>
            <th>name : </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($promotion as $value)
            
        <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td>
                <a href="Edit/{{$value->id}}"><button>Modifier</button></a>
                <a href="Delete/{{$value->id}}"><button>Supprimer</button></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

