<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\User;
use \App\Models\Review;

use Auth; 

class UserController extends Controller
{
    //geef 1 user weer
    public function show($name) {

        // vind users plus review
        $user = User::where('name', '=', $name)->first();
        //$reviews = Review::where('userID', '=', $user->id)->get();
        
        if ($user->blocked == true) {
            abort(404, "De gevraagde gebruiker is geblokkeerd door een admin");
        }

        // Return the view
        return view('profile.profile', [
            'profile' => $user,
        ]);
    }


    /**
     * Logs out the user and invalidates the session
     * 
     * @return The user is being redirected to the home page.
     */
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function block($name) {
        $user = User::where('name', '=', $name)->update(['blocked' => true]);
        return redirect('/');

    }
}
