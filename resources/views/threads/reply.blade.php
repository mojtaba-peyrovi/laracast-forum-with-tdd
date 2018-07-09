@foreach ($thread->replies as $reply)
    <div class="panel panel-default">
        <div class="panel panel-heading">
            <a href="#">
                {{ $reply->owner->name }}
            </a>
             said {{ $reply->created_at->diffForHumans() }}...
        </div>
        <div class="panel-body" style="margin-top:-25px;">
            {{ $reply->body }}
        </div>
    </div>
@endforeach
