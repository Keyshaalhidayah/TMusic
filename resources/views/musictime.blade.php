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
            
    <div class="music-player">
        <div class="track-info">
            <img src="{{ asset('image/img2.jpeg') }}" alt="Album-cover">
            <p>lirik</p>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
