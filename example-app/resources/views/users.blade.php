<h1 style="color:green;"> users</h1>

<p>{{$name}}</p>

@if($name == 'mohamed')
<h3 style="color:red;"> admin</h3>
@else
not
@endif

@for ($i = 0; $i < 10; $i++)
   {{$i}}
@endfor
