@extends('default')

@section('appbar')
    @include('product.components.appbar--index')
@endsection

@section('content')
<section class="review_wrapper">
    <form class='review-form' action="/reviews" method="POST">
            @csrf
            <section class="review-tekst">
                <input type="hidden" value="{{ $user->id }}" name="userID">
                <label for="text"> Voer hier uw tekst in: </label>
            </section>
            <section class="review-tekstarea">
                <textarea id="text" rows="20" cols="50" name="text" required></textarea>
            </section>
            
            <section class="review-button">
                <button class="review-form__button" type="submit"> Review plaatsen </button>
            </section>
            
    </form>
</section>

@endsection