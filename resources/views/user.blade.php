<div>

<h1>Here's is User Details</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Subject</th>
        <th>Name</th>
        <th>Faulty</th>
    </tr>
    @foreach($details as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->subject}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->faculty}}</td>
    </tr>
    @endforeach

</table>



</div>
