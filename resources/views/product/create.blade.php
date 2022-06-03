@extends('default')


@section('title')
voeg product toe 
@endsection

@section('appbar')
    @include('product.components.appbar--index')
@endsection

@section('content')

    <article class="create-form">
        <form class="create-form__form" action="/product" method="POST">
        @csrf
        
        <section class="create-form__section">
            <label for="name">Naam</label>
            <input class="create-form__input" name="name" id="name" type="text">
        </section>

        <section class="create-form__section">
            <label for="kind">Soort</label>
            <select class="create-form__input" name="kind" id="kind">
                @foreach($kind_of_product as $kind_of_product)
                    <option value={{$kind_of_product->kind}}> {{$kind_of_product->kind}}</option>
                @endforeach
            </select>
        </section>
        

        <section class="create-form__section">
            <label for="description"> Beschrijving</label>
            <input class="create-form__input" name="description" id="description" type="text">
        </section>

        <section class="create-form__section">
            <label for="image">Afbeelding</label>
            <input class="create-form__input" name="image" id="image" type="file">
        </section>

        <section class="create-form__section">
            <label for="price">Prijs</label>
            <input class="create-form__input" name="price" id="price" type="text">
        </section>
        
        <section class="create-form__section">
            <label for="date">Datum</label>
            <input class="create-form__input" name="date" id="date" type="date">
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit">maak product aan!</button>
        </section>

    </form>
    </article>
@endsection

