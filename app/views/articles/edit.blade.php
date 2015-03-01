<h1>Editing Article</h1>

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

{{ Form::open(array('route' => array('articles.update', $article->id), 'method' => 'put')) }}
    <p>
        {{ Form::text('title', $article->title) }}
    </p>
    <p>
        {{ Form::text('text', $article->text) }}
    </p>
    <p>
        {{ Form::submit('submit') }}
    </p>
{{ Form::close() }}

{{ link_to_route('articles.index', 'Back') }}