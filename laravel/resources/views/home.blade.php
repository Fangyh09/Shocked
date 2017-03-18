<html>
<body>
{{ Form::open(['method' => 'get', 'route' => 'search']) }}

  {{ Form::input('search', 'query', Input::get('query', ''))}}
  {{ Form::submit('Filter results') }}

{{ Form:: close() }}

@foreach($stories as $story)
 <div>
  <h2>{{ $story->title }}</h2>
  <div>{{ $story->text }}</div>
 </div>
@endforeach
</body>
</html>
