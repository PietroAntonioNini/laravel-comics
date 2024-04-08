<div id="main-img">
    <img class="jumbotron-img" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
</div>

<div id="main-cards">
    <div id="items">
        <h2 id="page-title">Current Series</h2>
    
        @foreach ($comics as $comic)
        <div class="card">
            <div id="comics-items">
                <div class="comics-poster">
                    <img class="comics-img" src="{{$comic['thumb']}}" alt="comicsName">
                </div>
            
                <h3 class="comics-title">{{ $comic['title'] }}</h3>
            </div>
        </div>
        @endforeach
    
        <button id="more">Load More</button>

        
    </div>
</div>

<div id="banner-top">
    <div class="banner-container-top">
        <ul>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="immagini articoli">
                <span>Digital Comics</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="immagini articoli">
                <span>DC Merchandise</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="immagini articoli">
                <span>Subscription</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="immagini articoli">
                <span>Comic shop locator</span>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="immagini articoli">
                <span>DC power visa</span>
            </li> 
        </ul>
    </div>
</div>