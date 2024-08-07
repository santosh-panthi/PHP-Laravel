<div>
   <h1>Login</h1>
   <form action="login" method="post">
   @csrf
       <input type="text" name="username" placeholder="Enter you Name"><br><br>
    <input type="password" name="password" placeholder="Enter your Password"><br><br>
    <input type="submit" value="Login">
   </form>
</div>
