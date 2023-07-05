@extends('layouts.app')
@section('content')
<form action="/users" method="post">
    @csrf
    <input type="text" name="user_name" >
    <button type="submit">Create</button>
</form>
@endsection