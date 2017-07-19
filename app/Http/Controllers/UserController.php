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
            $user = User::all()->where('username', Input::get('signUpMail'))->first();
            if (empty($user->username)) {
                $newUser = new User();
                $newUser->username = input::get('signUpMail');
                $newUser->password = md5(input::get('signUpPw'));
                $newUser->save();
                header("Location: login");
                die();
            } else {
                //ERROR: user existiert bereits
                header("Location: signup");
                die();
            }
        } else {
            //ERROR: passwörter stimmen nicht Überein
            header("Location: signup");
            die();
        }
    }


    public function login()
    {
        $user = User::all()->where('username', '=', Input::get('loginMail'))->first();
        if (empty($user->password)) {
            //ERROR: es existiert noch kein benutzer mit diesem usernamen oder passwort stimmt nicht überein
            //Benutzerangaben falsch
        } elseif ($user->password == md5(input::get('loginPw'))) {
/*            session_regenerate_id();
            $_SESSION['username'] = input::get('loginMail');
            $_SESSION['userid'] = $user->id;*/
            header("Location: home");
            die();
        }
    }

    /**
     *
     */
    public function logout(){
        //session_destroy();
        header("Location: home");
        die();
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
