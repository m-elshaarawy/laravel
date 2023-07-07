<h1> Create New Post</h1>

<form action="{{ route('posts.store')}}" method="post">
@csrf
Title : <input type="text" name="title" maxlength="20" placeholder="Enter Title">
<br><br>
Body  : <input type="text" name="body" placeholder="Enter Body">
<br><br>
<button type="submit">Create</button>

</form>
