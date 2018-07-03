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
