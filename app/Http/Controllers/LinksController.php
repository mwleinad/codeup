<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LinkRequest;
use App\Http\Controllers\Controller;
use App\Link;

use DB;

class LinksController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth', ["except" => ["show"]]);

        parent::__construct();
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$links = DB::table("links")->get();
        $links = Link::get();

        //dd($links);

        return view('links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinkRequest $request)
    {
        //validation is done before we hit this, in the request file
        //var_dump($request);

        //persists the link
        $link = $this->user->publish(
            new Link($request->all())
        );
        //Link::create($request->all());

        //flash messaging, we are hardcoding the message, this is better in a file
        flash()->Success("Success", "Link Created Successfully");

        //redirect to a landing page
        return redirect('links');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $link = Link::LocatedAt($slug)->first();

        return view('links.show', compact('link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
