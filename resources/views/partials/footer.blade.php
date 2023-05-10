<footer>
    <img id="footer-logo" src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="dc logo">

    <nav id="footer-nav-container" class="container container-xl">
        <div class="footer-left">
            <h4>DC COMICS</h4>
            <ul id="footer-nav-list" class="p-0 my-3">
                @foreach ($navLinks as $link)
                <li class="nav-item"><a href="{{$link['href']}}">{{$link['text']}}</a></li>
                @endforeach
            </ul>
            <h4>SHOP</h4>
            <ul id="footer-nav-list" class="p-0 my-3">
                @foreach ($footerLinksShop as $link)
                <li class="nav-item"><a href="{{$link['href']}}">{{$link['text']}}</a></li>
                @endforeach
            </ul>
        </div>


        <div class="footer-center">
            <h4>DC</h4>
            <ul id="footer-nav-list" class="p-0 my-3">
                @foreach ($footerLinksDc as $link)
                <li class="nav-item"><a href="{{$link['href']}}">{{$link['text']}}</a></li>
                @endforeach
            </ul>
        </div>


        <div class="footer-right">
            <h4>SITES</h4>
            <ul id="footer-nav-list" class="p-0 my-3">
                @foreach ($footerLinksSites as $link)
                <li class="nav-item"><a href="{{$link['href']}}">{{$link['text']}}</a></li>
                @endforeach
            </ul>
        </div>
    </nav>

    
</footer>
<div id="footer-banner">
    <div id="footer-banner-container"
        class="h-100 container container-xl d-flex justify-content-between align-items-center">
        <div class="h-100 d-flex align-items-center">
            <button id="banner-btn"><a href="#">SIGN-UP NOW!</a></button>
        </div>

        <div class="h-100 d-flex align-items-center">
            <h4 id="follow-claim">FOLLOW US</h4>
            <a class="social" href="https://www.facebook.com/" target="_blank"><img src="{{Vite::asset('resources/images/footer-facebook.png')}}"
                    alt="logo facebook"></a>
            <a class="social" href="https://twitter.com/" target="_blank"><img src="{{Vite::asset('resources/images/footer-twitter.png')}}"
                    alt="logo facebook"></a>
            <a class="social" href="https://www.youtube.com/" target="_blank"><img src="{{Vite::asset('resources/images/footer-youtube.png')}}"
                    alt="logo facebook"></a>
            <a class="social" href="https://www.pinterest.it/" target="_blank"><img src="{{Vite::asset('resources/images/footer-pinterest.png')}}"
                    alt="logo facebook"></a>
            <a class="social" href="https://www.pscp.tv/" target="_blank"><img src="{{Vite::asset('resources/images/footer-periscope.png')}}"
                    alt="logo facebook"></a>
        </div>

    </div>
</div>