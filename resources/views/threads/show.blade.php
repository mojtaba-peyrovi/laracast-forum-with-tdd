@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <a href="#">
                        {{ $thread->creator->name }}
                    </a>
                    posted:
                    {{ $thread->title }}</div>

                <div class="panel-body">
                    <strong>{{ $thread->body }}</strong><br>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('threads.reply')
        </div>
    </div>
    @if (auth()->check())
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="" action="{{ $thread->path() . '/replies' }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Have something to say?"></textarea>
                    </div>
                    <button type="submit" name="button" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
    @else
        <p class="text-center">please <a href="{{ route('login') }}">login</a> to participate in this discussion</p>        
    @endif

</div>
@endsection
