<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Review;
use \App\Models\User;
use Auth;

class ReviewController extends Controller
{
    public function create($userID) {

        $user = User::find($userID);

        if (!$user->writeReview()) return redirect()->back();

        
        return view('product.components.review', [
            'user' => $user,
        ]);
    }

    public function store(Request $request, Review $review) {
        $review->userID = (int)$request->input('userID');
        $review->writerID = Auth::user()->id;
        $review->text = $request->input('text');

        try {
            $review->save();
            $user = User::find((int)$request->input('userID'));
            return redirect('/profile/' . $user->name);
        } catch (Exception $e) {
            return redirect('');
        }
    }
}
