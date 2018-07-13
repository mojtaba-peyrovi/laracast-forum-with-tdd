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
                          <label for="channel_id">Channel: </label>
                          <select class="form-control" name="channel_id", id="channel_id" required>
                                <option>Pick a Channel</option>
                              @foreach ($channels as $channel)
                                <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'selected': ''}}>
                                    {{ $channel->name }}
                                </option>
                              @endforeach

                          </select>
                        </div>

                        <div class="form-group">
                          <label for="title">Title: </label>
                          <input type="text" class="form-control" name="title" value="{{ old('title')}}" required>
                        </div>
                         <div class="form-group">
                          <textarea name="body" rows="8" cols="80" class="form-control" placeholder="Your text here..."  required>
                              {{ old('body') }}
                          </textarea>
                      </div>
                      <div class="form-group">
                          <button type="submit" name="button" class="btn btn-primary">Submit</button>
                      </div>
                          @if (count($errors))
                              <ul class="alert alert-danger">
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
