<div>

<h1> data list</h1>
<form action="/search" method="get">
    <input type="text" name="search" value="{{@$search}}"  placeholder="search">
    <button>Search</button>
</form>
   
    <table border="1">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Operation</th>
        </tr>
        @foreach($data as $d)
            <tr>,
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->created_at}}</td>
                <td>{{$d->updated_at}}</td>
                <td><a href="{{'delete/'.$d->id}}">Delete</a></td>
                <td><a href="{{'edit/'.$d->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

    {{$data->links()}}
</div>
<style>
    .w-5.h-5{
        width: 20px;
    }
</style>
