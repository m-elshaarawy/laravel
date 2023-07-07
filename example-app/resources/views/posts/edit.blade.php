<h1> Edit Post</h1>

<form action="{{ route('posts.update',$edata->id)}}" method="post">
@csrf
@method('PUT')
Title : <input type="text" name="title" maxlength="20" value="{{$edata->title}}">
<br><br>
Body  : <input type="text" name="body" value="{{$edata->body}}">
<br><br>
<button type="submit">Edit</button>

</form>