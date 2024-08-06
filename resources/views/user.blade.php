<div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>subject</th>
            <th>name</th>
            <th>faculty</th>
        </tr>
        @foreach( $details as $detail)
        <tr>
                <td>{{$detail->id}}</td>
                <td>{{$detail->subject}}</td>
                <td>{{$detail->name}}</td>
                <td>{{$detail->faculty}}</td>

            
            </tr>
            @endforeach
    </table>
</div>
