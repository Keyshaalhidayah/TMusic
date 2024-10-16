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
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="navigation">
            <div class="logo">
                <h1>TM<span>usic</span></h1>
            </div>
            <ul class="menu">
                <li><i class="fas fa-home"></i> Home</li>
                <li id="playlist-header">
                    <i class="fas fa-bookmark"></i> Playlist
                    <span id="arrow" class="arrow">&#x25BC;</span>
                </li>
                <ul class="playlist-items" id="playlist-items">
                <li class="playlist-item">
                    <div class="playlist-image">
                    <img src="{{ asset('image/img1.jpeg') }}" alt="">
                    </div>
                    <span class="playlist-name">Vibes & Chill</span>
                </li>
                <li class="playlist-item">
                    <div class="playlist-image">
                    <img src="{{ asset('image/img1.jpeg') }}" alt="">
                    </div>
                    <span class="playlist-name">Morning Boost</span>
                </li>
                <li class="playlist-item">
                    <div class="playlist-image">
                    <img src="{{ asset('image/img1.jpeg') }}" alt="">
                    </div>
                    <span class="playlist-name">Rhythm & Energy</span>
                </li>
            </ul>

            <ul class="menu playlists">
                <li><i class="fas fa-heart"></i> Liked Songs</li>
                <li><i class="fas fa-headphones"></i> Hip Hop</li>
                <li><i class="fas fa-music"></i> Jazz Vibes</li>
                <li><i class="fas fa-chart-line"></i> Top 50</li>
            </ul>
            <a href="{{ route('create.playlist') }}">
                <button class="sidebar-btn">+ Create Playlist</button>
            </a>
            <div class="logout">
                <form action="{{ route('logout') }}" method="get">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
            </div>
        </div>
    </div>
    
    <div id="home" class="main-container">
    <div class="TM-PlayList">
            <div class="topbar">
                <div class="prev-next-button">
                    <button type="button" class="fa fas fa-chevron-left"></button>
                    <button type="button" class="fa fas fa-chevron-right"></button>
                </div>
            <div class="search-container">
                <div class="search-box">
                    <input type="text" id="search-input" placeholder="Apa yang ingin kamu putar?" onfocus="showSearchResults()" onblur="hideSearchResults()">
                    <button class="search-button"><i class="fa fa-search"></i></button>
                </div>
                <div class="search-results" id="search-results">
                    <p>Pencarian terakhir</p>
                    <ul>
                        <li>
                        <img src="{{ asset('image/img2.jpeg') }}" alt="">
                            <div>
                                <span>DJ VIRALLLL YANGG ASIKKK ASIKKK 😛😜</span><br>
                                <small>intaaannn</small>
                            </div>
                        </li>
                        <li>
                        <img src="{{ asset('image/img2.jpeg') }}" alt="">
                            <div>
                                <span>BLACKPINK</span><br>
                                <small>Artis</small>
                            </div>
                        </li>
                        <li>
                        <img src="{{ asset('image/img2.jpeg') }}" alt="">
                            <div>
                                <span>PLAYLIST ANGKOT GACORR WELL</span><br>
                                <small>Soundd Asia</small>
                            </div>
                        </li>
                        <!-- More items can go here -->
                    </ul>
                </div>
            </div>
                <div class="navbar">
                    <button class="menu-button">
                        <img src="{{ asset('image/webcam-toy-photo5.jpg') }}" alt="User Image">
                        <!-- Zura -->
                        {{ Auth::user()->name }}
                    </button>
                </div>
            </div>
    </div>

    <div id="playlist" class="playlist-section">
        <h2>Baru Saja Diputar</h2>
        <div class="carousel">
            <div class="album active">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
            <div class="album-info">
                <h3>Echoes of Midnight</h3>
                <p>Jon Hickman</p>
            </div>
            <button class="play-button"></button>
            </div>

            <div class="album inactive">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
            <div class="album-info">
                <h3>Another Album</h3>
                <p>Artist Name</p>
            </div>
            <button class="play-button"></button>
            </div>

            <div class="album inactive">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
            <div class="album-info">
                <h3>Next Album</h3>
                <p>Artist Name</p>
            </div>
            <button class="play-button"></button>
        </div>

        <div class="genres">
            <div class="header">
                <h5>Genres</h5>
                <a href="#">See all</a>
            </div>
            <div class="items">
                <div class="item">
                    <p>Electro<br>Pop</p>
                </div>
                <div class="item">
                    <p>Dance<br>Beat</p>
                </div>
                <div class="item">
                    <p>Clubhouse<br>Remix</p>
                </div>
                <div class="item">
                    <p>Hip Hop<br>Rap</p>
                </div>
                <div class="item">
                    <p>Alternative<br>Indie</p>
                </div>
                <div class="item">
                    <p>Classical<br>Period</p>
                </div>
            </div>
        </div>
    </div>


    <section class="categories-section">
        <h2>Select Categories</h2>
            <div class="categories">
                <button class="category active">All</button>
                <button class="category">Relax</button>
                <button class="category">Sad</button>
                <button class="category">Party</button>
                <button class="category">Romance</button>
                <button class="category">Energetic</button>
                <button class="category">Relaxing</button>
                <button class="category">Jazz</button>
                <button class="category">Alternative</button>
                <button class="scroll-arrow">&#10095;</button> <!-- Right arrow -->
            </div>
    </section>

    <!-- Popular Songs Section -->
    <section class="popular-songs-section">
            <h2>Popular songs</h2>
            <div class="song-grid">
                <div class="song">
                    <div class="song-thumbnail">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    </div>
                    <div class="song-info">
                        <h3>Golden Days</h3>
                        <p>Felix Carter</p>
                    </div>
                </div>
                <div class="song">
                    <div class="song-thumbnail">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    </div>
                    <div class="song-info">
                        <h3>Fading Horizon</h3>
                        <p>Ella Hunt</p>
                    </div>
                </div>
                <div class="song">
                    <div class="song-thumbnail">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    </div>
                    <div class="song-info">
                        <h3>Waves of Time</h3>
                        <p>Lana Rivers</p>
                    </div>
                </div>
                <div class="song">
                    <div class="song-thumbnail">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    </div>
                    <div class="song-info">
                        <h3>Electric Dreams</h3>
                        <p>Mia Lowell</p>
                    </div>
                </div>
                <div class="song">
                    <div class="song-thumbnail">
                    <img src="{{ asset('image/img6.png') }}" alt="">
                    </div>
                    <div class="song-info">
                        <h3>Shadows & Light</h3>
                        <p>Ryan Miles</p>
                    </div>
                </div>
            </div>
    </section>
</body>
<script>
    //playlist//
    document.getElementById("playlist-header").addEventListener("click", function() {
        const playlistItems = document.getElementById("playlist-items");
        const arrow = document.getElementById("arrow");

        if (playlistItems.classList.contains("visible")) {
            playlistItems.classList.remove("visible");
            arrow.innerHTML = "&#x25BC;";  // Down arrow
        } else {
            playlistItems.classList.add("visible");
            arrow.innerHTML = "&#x25B2;";  // Up arrow
        }
    });

    const albums = document.querySelectorAll('.album');
    const carousel = document.querySelector('.carousel');

    albums.forEach((album, index) => {
      album.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent click from propagating to the document
        // Remove 'active' class from all albums
        albums.forEach(a => a.classList.remove('active'));
        albums.forEach(a => a.classList.add('inactive'));
        
        // Add 'active' class to the clicked album
        album.classList.remove('inactive');
        album.classList.add('active');
      });
    });

    // Listen for clicks outside the carousel to reset the album states
    document.addEventListener('click', () => {
      albums.forEach(album => {
        album.classList.remove('active');
        album.classList.add('inactive');
      });
    });

    function showSearchResults() {
        const searchResults = document.getElementById('search-results');
        searchResults.style.opacity = '1';
        searchResults.style.transform = 'translateY(0)';
        searchResults.style.visibility = 'visible';
    }

    function hideSearchResults() {
        const searchResults = document.getElementById('search-results');
        setTimeout(() => {
            searchResults.style.opacity = '0';
            searchResults.style.transform = 'translateY(-10px)';
            searchResults.style.visibility = 'hidden';
        }, 200); // small delay to avoid immediate hide on blur
    }
  </script>
</html>