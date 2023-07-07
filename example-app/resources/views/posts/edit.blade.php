
<h1> Edit Post</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.update',$edata->id)}}" method="post">
@csrf
@method('PUT')
Title : <input type="text" name="title" maxlength="20" value="{{$edata->title}}">
<br><br>
Body  : <input type="text" name="body" value="{{$edata->body}}">
<br><br>
<button type="submit">Edit</button>

</form>