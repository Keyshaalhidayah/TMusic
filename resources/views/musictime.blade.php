<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Fullscreen</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="fullscreen-container">
        <img src="{{ asset('image/img2.jpeg') }}" alt="Background" class="background-image">
            <div class="content-overlay">
                <div class="top-bar">
                    <div class="album-info">
                        <div class="album-cover">
                        <img src="{{ asset('image/img2.jpeg') }}" alt="Album-cover">
                        </div>
                        <div class="text">
                            <h1>Aku Milikmu</h1>
                            <p>Dewa 19</p>
                        </div>
                    </div>
                    <div class="exit-button">
                        <span>To exit full screen, press <kbd>Esc</kbd></span>
                    </div>
            </div>

            <div class="trending">
                <div class="left">
                    <h5>Trending New Song</h5>
                    <div class="info">
                        <h2>Lost Emotions</h2>
                        <h4>Rion Clarke</h4>
                        <h5>63 Million Plays</h5>
                        <div class="buttons">
                            <button>Listen Now</button>
                            <i class='bx bxs-heart'></i>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('image/img2.jpeg') }}" alt="">
            </div>

            <div class="top-section">
                    <div class="header">
                        <h5>Player</h5>
                        <i class="bx bxs-playlist"></i>
                    </div>
                    <div class="song-info">
                        <img src="assets/player.png">
                        <div class="description">
                            <h3>Ripple Echoes</h3>
                            <h5>Kael Fischer</h5>
                            <p>Best of 2024</p>
                        </div>
                        <div class="progress">
                            <p>02:45</p>
                            <div class="active-line"></div>
                            <div class="deactive-line"></div>
                            <p>01:02</p>
                        </div>
                    </div>
                </div>`
    </div>
    </div>
</body>
</html>
