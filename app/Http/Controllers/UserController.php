<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserView;

class UserController extends Controller
{
    public function showHomePage ()
    {
        return view ('welcome');
    }
    public function index()
    {
       
    }
        public function anotherpage(Request $request){
            #return 'here';
            #return $request->Username;
        
               $saveUser=new UserView;
               $saveUser->Username=$request->Username;
               $saveUser->Password=$request->Password;
               $saveUser->MatricNo=$request->MatricNo;
               $saveUser->save();
              return 'You have suceessful';
           # return view ('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
