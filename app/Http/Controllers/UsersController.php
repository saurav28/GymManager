<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Users = \App\Users::all();

        return View('users.index') ->with ('users', $Users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    
    
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'plan'       => 'required',
            'password'   => 'required',
            'start_date' => 'required'
            
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $users = new \App\Users;
            $users->name       = $request->get('name');
            $users->email      = $request->get('email');
            $users->plan   = $request->get('plan');
            $users->password   = $request->get('password');
            $unformattedDate   = new \DateTime($request->get('start_date'));
            $formattedDate = $unformattedDate-> format("Y/m/d H:i:s"); //to convert into mysql date format
            $users->start_date = $formattedDate;
            $users->save();

            // redirect
            \Session::flash('message', 'Successfully created an user!');
            return \Redirect::to('users');
        }
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
        // get the nerd
        $user = \App\Users::find($id);

        // show the edit form and pass the nerd
        return \View::make('users.edit')
            ->with('user', $user);
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
         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'plan'       => 'plan'
            
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        } else {
            // store
            $user = \App\Users::find($id);
            $user->name       = $request->get('name');
            $user->email      = $request->get('email');
            $user->email      = $request->get('plan');
            
            $user->save();

            // redirect
            \Session::flash('message', 'Successfully updated user!');
            return \Redirect::to('users');
        }
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
