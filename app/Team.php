<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Team extends Model
{
    protected $fillable = [
    	'name', 
    	'size'
    ];

    public function add($users)
    {
    	$this->guardAgainstTooManyMembers($users);

    	$method = $users instanceof User ? 'save' : 'saveMany';

    	$this->members()->$method($users);
    	
    }

    public function removeMembers($users)
    {
    	if ($users instanceof User) {
    		return $users->leaveTeam();
    	}

    	$userIds = $users->pluck('id');

    	$this->members()
    		->whereIn('id', $userIds)
    		->update(['team_id' => null]);


    	
    }

    public function removeAllMembers()
    {
    	$this->members()->update(['team_id' => null]);
    }

    public function members()
    {
    	return $this->hasMany(User::class);
    }

    public function count()
    {
    	return $this->members()->count();
    }

    protected function guardAgainstTooManyMembers($users)
    {
    	$numUserstoAdd = ($users instanceof User) ? 1 : $users->count();
    	$newTeamCount = $this->count() + $numUserstoAdd;
    	if ($newTeamCount > $this->size) {
    		throw new \Exception('Too many members on the team');
    	}
    }

   
}
