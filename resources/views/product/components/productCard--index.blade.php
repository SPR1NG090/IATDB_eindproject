<li class="a-popup u-list-style-none productGridCard" data-kind-of-product={{$product->kind}}>
    <a href="/product/{{$product->id}}">
    <article >
        <header class="productGridCard__header u-flex-v-center">
            <h2 class="productGridCard__heading">{{$product->name}}</h2>
            <h3 class="ProductGridCard__kind">{{$product->kind}}</h3>
        </header>
        <figure class="productGridCard__figure">
            <img class="productGridCard__image" src="{{$product->image}}" alt="">
        </figure>
        <section class="productGridCard__textscn u-flex-v-center">
            <p class="productGridCard__text">{{$product->description}}</p>
        </section>
    </article>
    </a>
</li>