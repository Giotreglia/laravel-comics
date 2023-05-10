<header>
    <div id="header-container" class="container container-xl">
        <div id="logo-container">
            <a href="#"><img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="logo Dc"></a>
        </div>

        <nav>
            <ul id="nav-list" class="m-0">
                <li class="nav-item"><a href="#">ciao</a></li>
            </ul>
            <div id="dropdown-container">
                <div>
                    <button class="hamburger" v-if="dropdown"><i class="fa-solid fa-bars"></i></button>
                    <button class="hamburger" v-else><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div id="dropdown" v-if="!dropdown">
                    <ul id="nav-list-dropdown" class="d-flex m-0">
                        <li class="nav-item" ><a href="#">ciao</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</header>