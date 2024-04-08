<footer>
    <div class="footer-links">
        <div id="row">
            <div id="column-left">
                @foreach (array_slice($links, 0, 1) as $link)
                    <div>
                        <h3> {{ $link['title'] }} </h3>
                        <ul>
                            @foreach ($link['links'] as $sublink)
                                <li>{{ $sublink }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
    
                @foreach (array_slice($links, 1, 1) as $link)
                    <div>
                        <h3> {{ $link['title'] }} </h3>
                        <ul>
                            @foreach ($link['links'] as $sublink)
                                <li>{{ $sublink }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
    
            <div id="column-center">
                @foreach (array_slice($links, 2, 1) as $link)
                    <div>
                        <h3> {{ $link['title'] }} </h3>
                        <ul>
                            @foreach ($link['links'] as $sublink)
                                <li>{{ $sublink }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
    
            <div id="column-right">
                @foreach (array_slice($links, 3, 1) as $link)
                    <div>
                        <h3> {{ $link['title'] }} </h3>
                        <ul>
                            @foreach ($link['links'] as $sublink)
                                <li>{{ $sublink }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    
        <img src="{{ Vite::asset('resources//img/dc-logo-bg.png') }}" alt="logo DC">
    </div>

    <div id="banner-bottom">
        <div class="banner-container-bottom">

            <button id="sign-up">Sign-up now! </button>

            <div id="socials">
                <a class="follow-us" href="#">Follow US</a>
                
                <ul>
                    @foreach ($socials as $social)
                    <li>
                        <img class="social-img" src="{{ $social['img'] }}" alt="Loghi Social">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
