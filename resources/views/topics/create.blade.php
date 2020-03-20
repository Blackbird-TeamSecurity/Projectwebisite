@extends('layouts.app')
@section('extra-js')
{!! NoCaptcha::renderJs() !!}
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <h2>Creer un topic</h2>
    <hr>
<form action="{{route('topics.store')}}" method="POST">
@csrf
<div class="form-group">
    <label for="title">Titre du topic</label>
    <input type="text" class="form-control" @error('title')  is-invalide @enderror name="title" id="title">
    @error('title') 
<div class="class invalide-feedback">{{ $errors->first('title')}}</div>
    @enderror
</div>
<div class="form-group">
    <label for="content">Votre sujet</label>
    <textarea name="content" id="content" class="form-control" rows="5" @error('content') is-invalide  @enderror></textarea>
    @error('content') 
    <div class="class invalide-feedback">{{ $errors->first('content')}}</div>
        @enderror
    </div>
    <div class="class-form-group">
        {!! NoCaptcha::display() !!}
        @if ($errors->has('g-recaptcha-response'))
    <span class="help-block">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </span>
@endif
    </div>
    <button type="submit"  class="btn btn-primary center">Creer mon topic</button>

</div>
</form>
</div>
@endsection