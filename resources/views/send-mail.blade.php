<div>

<h1>Mailing</h1>
<form action="send-mail" method="post">
    @csrf
    <input type="email" name="to" placeholder="Enter your email"><br><br>
    <input type="text" name="subject" placeholder="Enter subject"><br><br><br>
    <textarea name="msg" placeholder="Enter message"></textarea><br><br><br>
    <input type="submit" value="Send">
</form>
</div>
