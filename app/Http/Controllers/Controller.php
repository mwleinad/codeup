<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user;
    protected $signedIn;

    public function __construct()
    {
    	$this->user = Auth::User();
    	$this->signedIn = Auth::Check();

    	view()->share('signedIn', $this->signedIn);
    	view()->share('user', $this->user);

    }
}
