<div >
    <a href="/upload">Upload image</a><br><br>
    @foreach($path as $p)
    <img style="width: 500px; width:300px " src="{{url('storage/'.$p->path)}}" alt="">
    @endforeach
</div>
