<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>_All Posts_</title>
</head>
<body>

    <table  class="table">
        <tr>  
            <th> # </th>
            <th> Title </th>  
            <th> Body </th>
            {{-- <th>
                <a href="{{ route('posts.delete.all.truncate') }}" class="btn btn-warning" role="button">Truncate</a> 
                <a href="{{ route('posts.delete.all') }}" class="btn btn-danger" role="button">Delete All</a>
      
            </th> --}}
        </tr>  
   @foreach ($data as $item)
    <tr> 
        <th> {{$item->id  }} </th> 
        <td> {{$item->title  }} </td>  
        <td> {{$item->body}} </td>
        <td> 
            
            <form action="{{ route('posts.destroy', $item->id ) }}" method="post">
                <a href="{{ route('posts.edit',$item->id) }}" class="btn btn-primary" role="button">Edit</a>
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">SoftDelete</button>
            </form>
            {{-- <a href="{{ route('posts.destroy',$item->id) }}" class="btn btn-danger" role="button">Delete</a>  --}}
        </td>     
    </tr>  
   @endforeach
   </table>

</body>
</html>


