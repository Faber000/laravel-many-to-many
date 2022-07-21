@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
            @if ($post->category)
            <span>{{$post->category->name}}</span>
            @endif
        </div>
        <div class="card-body">
            <div>
                {{$post->content}}
            </div>

            @if(count($post->tags) > 0)
            <div class="mt-3">
                <h4>Tags</h4>
                <ul>
                    @foreach ($post->tags as $tag)                    
                    <li>{{$tag->name}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection