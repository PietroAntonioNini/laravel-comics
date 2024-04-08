<nav>
    <div>
        <img id="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">

        <ul>
            <li class="tabs" v-for="tab in tabs">
                {{ tab }}
            </li>
        </ul>
    </div>
</nav>