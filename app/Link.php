<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use DB;

class Link extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'linkName',
        'save_to'    => 'slug',
    ];

	protected $fillable = [
		'link',
		'linkName'
	];
    //here we define our relationships
/*    public function Comments()
    {
    	$this->hasMany('App/Comment');
    }*/

    public function scopeLocatedAt($query, $slug)
    {
		return $query->where(compact("slug"));
    }

    //the link belongs to a user
    public function user()
    {
        //$this->belongsTo('App\User', 'user_id'); 
        return $this->belongsTo('App\User', 'user_id');
    }

    //the link has many votes
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function DecreasePoints()
    {
        DB::table('links')->decrement('points');
    }

}
