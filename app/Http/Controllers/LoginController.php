<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Hash;
use Auth;
use Redirect;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
    * Show the login form
    */
    public function showLogin() {

        return view('login');

    }

    /**
    * Login process
    */
    public function doLogin() {
        
        // create our user data for the authentication
        $userdata = array(
            'username'     => Input::get('form-username'),
            'password'  => Input::get('form-password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            return Redirect::to('test');

        } else {        

            // validation not successful, send back to form 
            // return Redirect::to('login');
            echo $userdata['username'];
            echo $userdata['password'];

        }

    }
}
