@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
<h2>{{$topic->title }}</h2>
    <hr>
<form action="{{route('topics.update', $topic)}}" method="POST">
@csrf
@method('PATCH')
<div class="form-group">
    <h1><label for="title">Titre du topic</label></h1>
<input type="text" class="form-control" @error('title')  is-invalide @enderror name="title" id="title" value="{{  $topic->title  }}">
    @error('title') 
<div class="class invalide-feedback">{{ $errors->first('title')}}</div>
    @enderror
</div>
<div class="form-group">
    <h1><label for="content">Votre sujet</label></h1>
<textarea name="content" id="content" class="form-control" rows="5" @error('content') is-invalide  @enderror>{{$topic->content}}</textarea>
    @error('content') 
    <div class="class invalide-feedback">{{ $errors->first('content')}}</div>
        @enderror
    </div>
    <button type="submit"  class="btn btn-primary center">Modifier mon topic</button>

</div>
</form>
</div>
@endsection