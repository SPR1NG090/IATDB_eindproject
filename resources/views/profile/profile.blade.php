@extends('default')

@section('appbar')
    @include('product.components.appbar--index')
@endsection

@section('content')

    <article class="profile">
        
        <section class="profile-top">
            <p class="profile-user">{{$profile->name}}</p>
            @if (Auth::check() && Auth::user()->isAdmin())
                <form class="svgForm selfCenterAlign" action="/profile/{{$profile->name}}/block" method="POST">

                    @csrf
                    <button class="profile-button" type='submit'>
                        Blokkeren
                    </button>
                </form>
            @endif
            </section class="profile-listedItems ">
        <section class="profile-content u-grid-2">
            <section>
                <h1 class="profile-content__title">Ook te leen:</h1>
                @foreach ($profile->getItems->slice(0,2) as $item)
                    <p class="profileReview-tekst">{{$item->name}}</p>
                @endforeach
            </section>
            

            <section>
                <h1 class="profile-content__title">Reviews:</h1>
                @foreach ($profile->Reviews->slice(0,2) as $review)
                    
                    <p class="profileReview-tekst">{{$review->text}}</p>
                @endforeach
            

                
                @if($profile->writeReview())
                    <h1 class="profile-content__title">Plaats een review:</h1>
                    <a href="/reviews/create{{$profile->id}}">klik hier!</a>
                @endif
            </section>
        </section>
    </article>
@endsection

