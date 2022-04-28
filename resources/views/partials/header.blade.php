<header>
    <div class="top-bar">
        <div class="container">
            <div>DC POWER℠ VISA®</div>
            <div>ADDITIONAL DC SITES▼</div>
        </div>
    </div>
    <nav> 
        <div class="container">
            <img src="{{ asset('assets/dc-logo.png') }}" alt=""/>
            <ul>
                <li class="{{ Route::current()->getName() == 'characters' ? 'active' : null }}"><a href="#">Characters</a></li>
                <li class="{{ Route::current()->getName() == 'comics' ? 'active' : null }}"><a href="#">Comics</a></li>
                <li class="{{ Route::current()->getName() == 'movies' ? 'active' : null }}"><a href="#">Movies</a></li>
                <li class="{{ Route::current()->getName() == 'tv' ? 'active' : null }}"><a href="#">Tv</a></li>
                <li class="{{ Route::current()->getName() == 'games' ? 'active' : null }}"><a href="#">Games</a></li>
                <li class="{{ Route::current()->getName() == 'collectibles' ? 'active' : null }}"><a href="#">Collectibles</a></li>
                <li class="{{ Route::current()->getName() == 'videos' ? 'active' : null }}"><a href="#">Videos</a></li>
                <li class="{{ Route::current()->getName() == 'fans' ? 'active' : null }}"><a href="#">Fans</a></li>
                <li class="{{ Route::current()->getName() == 'news' ? 'active' : null }}"><a href="#">News</a></li>
                <li class="{{ Route::current()->getName() == 'shop' ? 'active' : null }}"><a href="#">Shop</a></li>
            </ul>
            <input placeholder="Search" type="text"/>
        </div>
    </nav>
</header>