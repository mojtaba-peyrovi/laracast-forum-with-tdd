@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Thread</div>
                <div class="panel-body">
                    <form action="/threads" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label for="title">Title: </label>
                          <input type="text" class="form-control" name="title">
                        </div>
                         <div class="form-group">
                          <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Your text here..."></textarea>
                      </div>
                          <button type="submit" name="button" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
