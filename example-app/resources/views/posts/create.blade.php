<h1> Create New Post</h1>

<form action="{{ route('post.insert')}}" method="post">
@csrf
Title : <input type="text" name="title" maxlength="10" placeholder="Enter Title">
<br><br>
Body  : <input type="text" name="body" placeholder="Enter Body">
<br><br>
<button type="submit">Create</button>

</form>
