@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    @foreach ($threads as $thread)
                        <article class="">
                            <a href="{{ $thread->path() }}">
                                <h4>{{ $thread->title }}</h4>
                            </a>

                            <h6>Created By:
                                <a href="#">
                                    {{ $thread->creator->name}}
                                </a>

                            </h6>


                            <div class="body">
                                {{ $thread->body }}
                            </div>
                        </article>
                        <hr>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
