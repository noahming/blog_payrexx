<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (input::get('signUpPw') == input::get('signUpPw2')) {
            if (!User::all()->where('username', '=', Input::get('signUpMail'))) {
                $newUser = new User();
                $newUser->username = input::get('signUpMail');
                $newUser->password = md5(input::get('signUpPw'));
                $newUser->save();
            } else {
                //ERROR: user existiert bereits
            }
        } else {
            //ERROR: passwörter stimmen nicht Überein
        }
        return view('login');
    }


    public function login()
    {
        $user = new User;
        $user = User::all()->where('username', '=', Input::get('loginMail'));
        if($user->password == input::get('loginMail')){
            session_regenerate_id();
            $_SESSION['email'] = input::get('loginMail');
            $user = userByEmail($mysqli,$email);
            $_SESSION['uid'] = $user[0]['id'];
        }
        else{
            //ERROR: es existiert noch kein benutzer mit diesem usernamen oder passwort stimmt nicht überein
            //Benutzerangaben falsch
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
