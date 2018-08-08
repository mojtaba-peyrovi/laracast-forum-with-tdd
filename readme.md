### Forum-laracast with TDD:

## part 2:
instead of having the link in view like this: <a href="/threads/{{ $thread->id }} ></a>   we can make a function called path() in Thread.php model and inside it say:    return '/threads/ . $this->id;
and pass in view:   <a href="{{ $thread->path() }}" ></a>

--------------
## part 3:
when we have to repeat a process in testing, we can define a setUp() function in the beginning of the test class and use it by referencing it. in this example we did it for making threads with factory for all tests.
- making the test form terminal:    php artisan make:test ReplyTest --unit
unit level testing is lower that the feature testing and easier to debug.
- when we want to call the relationship something else than the defualt, for defining the relationship we need to be specific about the primary key and pass it as the second argument of the relationship method. like this:
class Reply extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
becuase I didnt call it user() then I need to specifically say we use user_id.

-----
## part 4:
in order to check if the user is authenticated or not in the test we can say:
$this->be($user = factory('App\User')->create());

------------
##part 5:
testing is a bit more advanced than I am at the moment so I won't do it for now and just focus on the main php tasks.
when in blade we want to check auth easily say @if(auth()->check())   @endif
-- when we do factory we can say ->create()  then it gives an instance of user, or any model. but if we say ->raw()  it will return it as an array. 

-------------
## part 12:
a nice helper:   old('<field_name>')  ==>inside blade can remember the last input values. example: 
<input type="text" class="form-control" name="title" value="{{ old('title')}}">
or 
<textarea name="body" rows="8" cols="80" class="form-control" placeholder="Your text here...">{{ old('body') }}</textarea>

