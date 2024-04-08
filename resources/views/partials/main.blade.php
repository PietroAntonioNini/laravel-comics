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