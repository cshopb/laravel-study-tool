<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        User::create(['username'  => $input['username'],
                      'password'  => \Crypt::encrypt($input['password']),
                      'email'     => $input['email'],
                      'name'      => $input['name'],
                      'contact'   => $input['contact'],
                      'privilege' => \Crypt::encrypt('user'),
        ]); //we are making a new entry in Users DB

        return redirect('/'); //we are returning to root page
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param CreateUserRequest $request
     * @return Response
     */
    public function update($id, CreateUserRequest $request)
    {
        $user = User::findOrFail($id);

        $submitted = $request->all();
        $submitted['password'] = \Crypt::encrypt($submitted['password']);

        $user->update($submitted);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
