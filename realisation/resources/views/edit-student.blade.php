@foreach ($Student as $value)
    
<form action="{{url('update-student')}}/{{$value->id}}" method="post">
    @csrf
    Nom : <input type="text" value="{{$value->name}}" name="name">
    Nickname : <input type="text" value="{{$value->nickname}}" name="nickname">
    Email : <input type="text" value="{{$value->email}}" name="email">
    <button>Update</button>
</form>
@endforeach
