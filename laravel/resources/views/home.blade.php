<html>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("static/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset("static/css/freelancer.min.css")}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset("static/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
</head>
<body>

<form action="" method="POST" role="form">
    <legend>Form title</legend>

    <div class="form-group">
        <label for="">label</label>
        <input type="text" class="form-control" id="" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">label</label>
        <input type="text" class="form-control" id="" placeholder="Input field">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


{{--{{ Form::open(['method' => 'get', 'route' => 'search']) }}--}}

{{--{{ Form::input('search', 'query', Input::get('query', ''))}}--}}
{{--{{ Form::submit('Filter results') }}--}}

{{--{{ Form:: close() }}--}}

{{--@foreach($stories as $story)--}}
    {{--<div>--}}
        {{--<h2>{{ $story->title }}</h2>--}}
        {{--<div>{{ $story->text }}</div>--}}
    {{--</div>--}}
{{--@endforeach--}}
</body>
</html>
