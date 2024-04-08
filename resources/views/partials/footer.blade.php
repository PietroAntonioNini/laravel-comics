<footer>

    <img class="image-container" src="{{ Vite::asset('resources/img/footer-bg.jpg') }}" alt="Background Image">

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
                    <li>
                        <img class="social-img" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Loghi Social">
                    </li>
                    <li>
                        <img class="social-img" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Loghi Social">
                    </li>
                    <li>
                        <img class="social-img" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Loghi Social">
                    </li>
                    <li>
                        <img class="social-img" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Loghi Social">
                    </li>
                    <li>
                        <img class="social-img" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Loghi Social">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
