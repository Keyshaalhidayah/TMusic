<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('image/tm.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-nav">
            <div class="logo">
                <a href="">
                    <img src="{{ asset('image/tm.png') }}" alt="logo">
                </a>
            </div>
        </div>

        <div class="navigation">
            <ul>
                <li>
                    <a href="#home">
                        <span class="fa fa-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#search">
                        <span class="fa fa-search"></span>
                        <span>Search</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="navigation">
            <ul>
                <li>
                    <a href="#library">
                        <span class="fa fas fa-book"></span>
                        <span>Library</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-list"></span>
                        <span>Create PlayList</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa fa-heart"></span>
                        <span>Liked Songs</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="policies">
            <ul>
                <li>
                    <a href="">Cookies</a>
                </li>
                <li>
                    <a href="">Privacy</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="home" class="main-container">
        <div class="topbar">
            <div class="prev-next-button">
                <button type="button" class="fa fas fa-chevron-left"></button>
                <button type="button" class="fa fas fa-chevron-right"></button>
            </div>

            <div class="navbar">
                <div class="menu">
                    <button class="menu-button">
                        <img src="{{ asset('image/webcam-toy-photo5.jpg') }}" alt="User Image">
                        <!-- Dimas -->
                        {{ Auth::user()->name }}
                    </button>
                </div>
            </div>
        </div>

        <div class="TM-PlayList">
        <section>
            <div class="playList">
                <div class="genres">
                    <div class="header">
                        <h5>Genres</h5>
                        <a href="#">See all</a>
                    </div>
                    <div class="items">
                        <div class="item">
                            <p>Music Favorit</p>
                        </div>
                        <div class="item">
                            <p>Jawir Music</p>
                        </div>
                        <div class="item">
                            <p>K/Da</p>
                        </div>
                        <div class="item">
                            <p>Liked Songs</p>
                        </div>
                        <div class="item">
                            <p>Dance Electronic mix</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
            <h2>Welcome TMusic</h2>
            <div class="List">
                <div class="item">
                    <img src="{{ asset('image/img4.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Today Top</h4>
                    <p>Bring Me To Life</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img3.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Recomendation</h4>
                    <p>In The End</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img5.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Hits</h4>
                    <p>See You Again</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img4.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Today Top</h4>
                    <p>Bring Me To Life</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img3.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Recomendation</h4>
                    <p>In The End</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img5.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Hits</h4>
                    <p>See You Again</p>
                </div>
            </div>
        </div>

        <div class="TM-PlayList">
            <h2>Shows you might like</h2>
            <div class="List">
                <div class="item">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Today Top</h4>
                    <p>Lagu Ganteng</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img1.jpeg') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Recomendation</h4>
                    <p>Galau</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img2.jpeg') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Hits</h4>
                    <p>pop mix</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Today Top</h4>
                    <p>Lagu Ganteng</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img1.jpeg') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Recomendation</h4>
                    <p>Galau</p>
                </div>
                <div class="item">
                    <img src="{{ asset('image/img2.jpeg') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Hits</h4>
                    <p>pop mix</p>
                </div>
            </div>
            <hr>
        </div>
    <main>
        <header>
            <div id="search" class="Search">
                <span class="fa fa-magnifying-glass"></span>
                <input type="text" placeholder="Type here to search">
            </div>

        </header>
    </main>

    <section>
        <div class="trending">
            <div class="left">
                <h5>Trending New Song</h5>
                <div class="info">
                    <h2>Bring Me To Life</h2>
                    <h4>evanescence</h4>
                    <h5>24 Milion Plays</h5>
                    <div class="buttons">
                        <button>Listen Now</button>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>
            <img src="{{ asset('image/img4.png') }}" alt="">
        </div>
    </section>
    <section>
        <div class="items">
            <div class="item">
                <div class="info">
                    <p>01</p>
                    <img src="{{ asset('image/img2.jpeg') }}">
                    <div class="details">
                        <h5>Aku Milikmu</h5>
                        <p>Dewa 19</p>
                    </div>
                    <div class="actions">
                        <p>5.32</p>
                        <div class="icon">
                        <i class="fa-solid fa-circle-play"></i>
                        </div>
                        <i class="fa-solid fa-square-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="https://kit.fontawesome.com/ef9a692198.js" crossorigin="anonymous"></script>
</body>
</html>
