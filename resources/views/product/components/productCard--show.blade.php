<section class="product-wrapper">
    <Article class="productCard">
    
    
    <section class="productCard__title">
        <p>{{$product->name}}</p>
    </section>

    <figure class="productCard__figure">
        <img class="productCard__image" src={{$product->image}} alt="">
    </figure>

    <section class="productCard__info">
        <h1 class="productCard__info__title">Beschrijving:</h1>
        <p class="productCard__text">{{$product->description}}</p>
        
        <h1 class="productCard__info__title">Prijs: </h1>
        <p class="productCard__text">{{$product->price}}</p>
        <h1 class="productCard__info__title">Retourneer datum: </h1>
        <p class="productCard__text">{{$product->date}}</p>
        <section class="u-grid-2">
            <section>
                @if ($product->checkIfAvailable())
                    <form class="" action="/products/{{$product->id}}/request" method="POST">

                        @csrf
                        <button class="productCard__button"type='submit'>Leen Nu</button>
                    </form>
                @else
                    <form class="" action="/products/{{$product->id}}/return" method="POST">

                        @csrf
                        @method('DELETE')
                        <button class="productCard__button" type='submit'>Retourneer</button>
                    </form>
                @endif
                
                <a class="prodcutCard__back_to_home" href="/product">Terug naar de Webshop</a>
            </section>

            <section>
                @if (Auth::check() && Auth::user()->isAdmin())
                    <form class="svgForm" action="/products/{{$product->id}}" method="POST">

                        @csrf
                        @method("DELETE")
                        <button class="productCard__button__delete" type='submit'>
                            Verwijder Item
                        </button>
                    </form>
                @endif
            </section>
        </section>
    
    </section>
        
</Article>

<article class="userCard">
    <section class="userCard__id">
        <p class="userCard__title">{{$product->getOwner->name}}</p>
        <p>11 maanden actief op Time2Share</p>
        <button class="userCard__button"><a class="userCard__button__a"href="/profile/{{$product->getOwner->name}}">Bekijk profiel</a></button>
        
    </section>
</article>

</section>