<h1>New Article</h1> 
{{ Form::open(array('url' => 'articles')) }}
    <p>
        {{ Form::text('title') }}
    </p>
    <p>
        {{ Form::text('text') }}
    </p>
    <p>
        {{ Form::submit('submit') }}
    </p>
{{ Form::close() }}
@if ($errors->any())
<div id="error_explanation">  
    <h2>{{ count($errors->all()) }} prohibited
      this article from being saved:</h2>
    <ul>
    @foreach ($errors->all() as $message)
      <li>{{ $message }}</li>
    @endforeach
    </ul>
  </div>
@endif
{{link_to_route('articles.index','Back')}}