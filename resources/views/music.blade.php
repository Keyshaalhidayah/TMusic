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
        <div class="navigation">
            <ul>
                <li><a href="#home"><span class="fa fa-home"></span><span>Home</span></a></li>
                <li><a href="#search"><span class="fa fa-search"></span><span>Search</span></a></li>
                <li><a href="#library"><span class="fa fa-book"></span><span>Library</span></a></li>
                <li><a href="#playlist"><span class="fa fa-list"></span><span>Create Playlist</span></a></li>
                <li><a href="#"><span class="fa fa-heart"></span><span>Liked Songs</span></a></li>
            </ul>
        </div>

        <div class="policies">
            <ul>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </div>

    <div id="home" class="main-container">
        <!-- Topbar and other content -->
        <div class="TM-PlayList">
            <div class="topbar">
            <div class="topbar">
            <div class="prev-next-button">
                <button type="button" class="fa fas fa-chevron-left"></button>
                <button type="button" class="fa fas fa-chevron-right"></button>
            </div>
        </div>

            <div class="navbar">
                <div class="menu">
                    <button class="menu-button">
                        <img src="{{ asset('image/webcam-toy-photo5.jpg') }}" alt="User Image">
                        <!-- Dimas -->
                        {{ Auth::user()->name }}
                    </button>
                </div>
                <div class="logout">
                <form action="{{ route('logout') }}" method="get">
                    @csrf
                    <button type="submit" class="logout-button">Logout</button>
                </form>
                </div>
            </div>
    </div>
    </div>

        <!-- Pisahkan bagian TM-PlayList dan h2 -->
    <div id="playlist" class="playlist-section">
        <section>
                <div class="playList">
                <div class="genres">
                    <div class="header">
                        <h5>Semua</h5>
                    </div>
                    <div class="items">
                        <div class="item">
                            <p>MusicFavorit</p>
                        </div>
                        <div class="item">
                            <p>JawirMusic</p>
                        </div>
                        <div class="item">
                            <p>K/Da </p>
                        </div>
                        <div class="item">
                            <p>LikedSongs</p>
                        </div>
                        <div class="item">
                            <p>DanceElectronicmix</p>
                        </div>
                    </div>
                </div>
            </section>
            <h2>Dibuat Untuk Anda</h2>
            <div class="List">
            <div class="item">
                    <img src="{{ asset('image/img4.png') }}" alt="">
                    <div class="play">
                    <span id="playPauseIcon" class="fa fa-play" onclick="toggleAudio('audio1', this)"></span>
                    </div>
                    <h4>Today Top</h4>
                    <p>Bring Me To Life</p>
                    <audio id="audio1" class="audio-control">
                    <source src="{{ asset('audio/bringmetolife.mp3') }}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
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
            <h2>Baru Saja Diputar</h2>
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
                <div class="item" include="musictime.blade.php">
                    <img src="{{ asset('image/img2.jpeg') }}" alt="">
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Hits</h4>
                    <p>pop mix</p>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <main>
            <header>
                <div id="search" class="Search">
                    <span class="fa fa-magnifying-glass"></span>
                    <input type="text" placeholder="Type here to search">
                </div>

            </header>
        </main>

        <!-- Section for search -->
        <div class="search-results">
    <h2>Top Results</h2>
    <div class="result-items">
            <div class="item">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
                <div class="info">
                    <h4>Artist Name</h4>
                    <p>Artist</p>
                </div>
                <div class="play-icon">
                    <span class="fa fa-play"></span>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
                <div class="info">
                    <h4>Song Title</h4>
                    <p>Song • Artist Name</p>
                </div>
                <div class="play-icon">
                    <span class="fa fa-play"></span>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
                <div class="info">
                    <h4>Podcast Title</h4>
                    <p>Podcast</p>
                </div>
                <div class="play-icon">
                    <span class="fa fa-play"></span>
                </div>
            </div>
            <!-- Tambahkan lebih banyak item di sini -->
            <div class="item">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
                <div class="info">
                    <h4>Song Title 2</h4>
                    <p>Song • Artist Name</p>
                </div>
                <div class="play-icon">
                    <span class="fa fa-play"></span>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
                <div class="info">
                    <h4>Artist Name 2</h4>
                    <p>Artist</p>
                </div>
                <div class="play-icon">
                    <span class="fa fa-play"></span>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('image/img2.jpeg') }}" alt="">
                <div class="info">
                    <h4>Podcast Title 2</h4>
                    <p>Podcast</p>
                </div>
                <div class="play-icon">
                    <span class="fa fa-play"></span>
                </div>
            </div>
    </div>
    <!-- tampilan play music -->

    <script src="https://kit.fontawesome.com/ef9a692198.js" crossorigin="anonymous"></script>
    <script>
        function toggleAudio(audioId, iconElement) {
            var audio = document.getElementById(audioId);
            if (audio.paused) {
                audio.play();
                iconElement.classList.remove('fa-play');
                iconElement.classList.add('fa-pause');
            } else {
                audio.pause();
                iconElement.classList.remove('fa-pause');
                iconElement.classList.add('fa-play');
            }
        }
    </script>
</body>
</html>
