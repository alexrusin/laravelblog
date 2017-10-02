<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Like;

class Post extends Model
{
	protected $fillable = [
		'user_id',
		'title',
		'body'
	];

	public function likes()
	{
		return $this->morphMany(Like::class, 'likable');
	}

	public function like()
	{
		$like = new Like(['user_id'=>Auth::id()]);
		$this->likes()->save($like);
	}

	public function isLiked()
	{
		return !! $this->likes()
				->where('user_id', Auth::id())
				->count();
	}

    public static function archives()
    {

    	return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
    	->groupBy('year', 'month')
    	->orderByRaw('min(created_at) desc')
    	->get()
    	->toArray();
   
    }
}
