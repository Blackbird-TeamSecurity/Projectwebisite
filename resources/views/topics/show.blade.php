@extends('layouts.app')
@section('extra-js')
    <script>
        function toggleReplyComment(id)
        {
            let element = document.getElementById('replyComment-'+ id);
            element.classList.toggle('d-none');
        }
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{$topic->title}}</h5>
        <p>{{$topic->content}}</p>
            <div class="d-flex justify-content-between align-items-center">
            <small>Poster le {{ $topic->created_at->format('d/m/y a H:m')}}</small>
            <span class="badge badge-primary">{{ $topic->user->name }}</span>
        </div>
        <div class="d-flex justify-content-between align-item-center mt-3">
            @can('update', $topic)
            <a href="{{route('topics.edit', $topic)}}" class="btn btn-warning"> editer ce topic</a>
            @endcan

            @can('delete', $topic)
            <form action="{{route('topics.destroy', $topic)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            @endcan

                </div>
            </div>         
        </div>
    </div>
        <hr>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5>Commentaires</h5>
                    @forelse ($topic->comments as $comment)
                        <div class="card mb-2">
                            <div class="card-body">
                                {{$comment->content}}
                                <div class="d-flex justify-content-between align-items-center">
                                    <small>Poster le {{ $comment->created_at->format('d/m/Y')}}</small>
                                    <span class="badge badge-primary">{{ $comment->user->name }}</span>
                                  </div>
                            </div>
                        </div>
                        @auth
                        <button  class="btn btn-info mb-3" onclick="toggleReplyComment({{$comment->id}})
                                        ">Repondre</button>
                        <form action="{{ route('comments.storeReply',$comment)}}"  method="post" class="mb-3 ml-5 d-none" id="replyComment-{{$comment->id}}">
                            @csrf
                            <div class="form-group">
                                <label for="replyComment">Ma reponse</label>
                                <textarea name="replyComment" class="form-control" id="replyComment" @{{ csrf_field() }} rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Repondre a ce commentaire</button>
                        </form>
                        @endauth
                    @empty
                        <div class="alert alert-info">Aucun commentaire pour ce topic</div>
                    @endforelse
                <form action="{{route('comments.store', $topic)}}" method="post" class="mt-3">
                @csrf
                <div class="form-group">
                    <label for="content">Votre Commentaire</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" 
                    name="content" id="content"  rows="5"></textarea>
                </div>
                @error('content')
            <div class="invalid-feedback">{{$errors->first('content')}}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Soumettre mon commentaire</button>
                </form>
                </div>        
            </div>        
        </div>            
@endsection