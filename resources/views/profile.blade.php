<div> @if(session('user'))
    <h1>Welcom to profile</h1>
    @else
       <h1>No session available</h1>
    
    @endif

    <a href="logout">Logout</a>
    


</div>