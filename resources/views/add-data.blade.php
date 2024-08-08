<div>
    

<h1>Fill Data</h1>
<form action="/add" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" ><br><br>
    <input type="email" name="email" placeholder="Email" ><br><br>
    <input type="text" name="phone" placeholder="Phone"  ><br><br>
    <input type="submit" value="Submit">
</form>

</div>
