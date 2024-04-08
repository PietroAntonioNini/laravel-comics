<nav>
    <div class="banner">
        <div>
            <span>DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>
    
    <div class="items">
        <img id="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">

        <ul>
            @foreach ($tabs as $tab)
            <li class="tabs">
                {{ $tab }}
            </li>
            @endforeach
        </ul>
    </div>
</nav>