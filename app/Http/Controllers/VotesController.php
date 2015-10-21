<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Link;
use App\Vote;


class VotesController extends Controller
{

   public function __construct()
    {

        parent::__construct();
        
    }

    public function Upvote(Request $request)
    {
        $id = $request->id;
        //exit;

        if(!$this->signedIn)
        {
            $json = flash()->toJson("Error", "You're not signed in", "error");
            return;
        }

        $link = Link::find($id);

        if(!$link)
        {
            $json = flash()->toJson("Error", "No Link there", "error");
            return;
        }
        //check if user already voted
        $voted = Vote::whereLinkId($id)
            ->whereUserId($this->user->id)
            ->first();

        if($voted)
        {
            $json = flash()->toJson("Error", "You can't vote twice", "error");
            return $json;
        }

        //vote
        $link->points = $link->points + 1;
        $link->save();

        //save your vote
        $vote = new Vote;
        $vote->user_id = $this->user->id;
        $vote->link_id = $id;
        $vote->save();

        $json = flash()->toJson("Success", "Vote Successful", "success");
        return $json;
    }

    public function Downvote(Request $request)
    {
        $id = $request->id;
        //exit;

        if(!$this->signedIn)
        {
            $json = flash()->toJson("Error", "You're not signed in", "error");
            return;
        }

        $link = Link::find($id);

        if(!$link)
        {
            $json = flash()->toJson("Error", "No Link there", "error");
            return;
        }
        //check if user already voted
        $voted = Vote::whereLinkId($id)
            ->whereUserId($this->user->id)
            ->first();

        if($voted)
        {
            $json = flash()->toJson("Error", "You can't vote twice", "error");
            return $json;
        }

        //vote
        $link->points = $link->points - 1;
        $link->save();

        //save your vote
        $vote = new Vote;
        $vote->user_id = $this->user->id;
        $vote->link_id = $id;
        $vote->save();

        $json = flash()->toJson("Success", "Vote Successful", "success");
        return $json;
    }    

}
