<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

    <body>
	  	{{-- print_r($data) --}}
	  	{{--$data['name']--}} {{--$data['surname']--}} {{--$data['email']--}}

	  	{{-- print_r($item)-- }}
	  	{{--$item['item1']--}}

<!-- ---------------------------------------------->
	{{$user->name}}
	<br>
	{{$data['name']}}
	  	@if($mods)
	
    <ul>
    @foreach($mods as $item)
        <li>{{ $item->name.' : '.$item->surname }}</li>
    @endforeach
    </ul>
		@endif



    </body>
</html>

