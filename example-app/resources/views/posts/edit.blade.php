<h1> Edit Post</h1>

<form action="{{ route('post.insert')}}" method="post">
@csrf
Title : <input type="text" name="title" maxlength="10" value="{{$edata->title}}">
<br><br>
Body  : <input type="text" name="body" value="{{$edata->body}}">
<br><br>
<button type="submit">Edit</button>

</form>