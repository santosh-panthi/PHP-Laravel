<div>


<h1>Upload Image</h1>
<form action="upload" method="post" enctype="multipart/form-data" >
    @csrf
    <input type="file" name="image" >
    <br><br>
    <button>Upload</button>
</form>


</div>
