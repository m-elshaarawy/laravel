<h1> Create New Post</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{ route('posts.store')}}" method="post">
@csrf
Title : <input type="text" class="@error('title') is-invalid @enderror" name="title" value="{{old('title')}}" required maxlength="20" placeholder="Enter Title">
<br><br>
@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
Body  : <input type="text" class="@error('body') is-invalid @enderror"name="body" value="{{old('body')}}" required placeholder="Enter Body">
<br><br>
@error('body')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<button type="submit">Create</button>

</form>
