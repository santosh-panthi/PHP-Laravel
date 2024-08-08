<div>
<form action="/edit/{{$data->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <input type="text" name="name" placeholder="Name" value="{{$data->name}}"><br><br>
    <input type="email" name="email" plac8000eholder="Email" value="{{$data->email}}"><br><br>
    <input type="text" name="phone" placeholder="Phone" value="{{$data->email}}" ><br><br>
    <input type="submit" value="Update">
    <a href="/list">Cancel</a>
</form>

</div>
