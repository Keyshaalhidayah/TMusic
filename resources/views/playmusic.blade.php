<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>playmusic</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
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

<div class="playmusic-container">
        <div class="playmusic-info">
            <div class="playmusic-cover">
            <img src="{{ asset('image/img6.png') }}" alt="">
            </div>
            <div class="playmusic-details">
                <p class="playmusic-type">Single</p>
                <h1>Die With A Smile</h1>
                <p class="artist">Lady Gaga & Bruno Mars • 2024 • 1 song, 4 min 11 sec</p>
            </div>
        </div>

        <!-- Song Table -->
        <div class="song-list">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Plays</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Die With A Smile<br><small>Lady Gaga, Bruno Mars</small></td>
                        <td>557,406,683</td>
                        <td>4:11</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Album Footer -->
        <div class="playmusic-footer">
            <p>August 16, 2024</p>
            <p>&copy; 2024 Interscope Records</p>
        </div>

        <div class="progress-section">
        <div class="music-info">
            <div class="album-cover">
                <img src="https://via.placeholder.com/60" alt="Album cover">
            </div>
            <div class="song-details">
                <h3>Getting Even</h3>
                <p>White Lies</p>
            </div>
        </div>

        <div class="controls">
            <button id="shuffleBtn"><i class="fas fa-random"></i></button>
            <button id="prevBtn"><i class="fas fa-step-backward"></i></button>
            <button id="playPauseBtn"><i id="playIcon" class="fas fa-play-circle"></i></button>
            <button id="nextBtn"><i class="fas fa-step-forward"></i></button>
            <button id="repeatBtn"><i class="fas fa-redo"></i></button>
        </div>

        <div class="progress-bar">
             <div class="progress" id="progress"></div>
        </div>

        <div class="time">
            <span id="currentTime">00:00</span>
            <span id="totalTime">03:12</span>
        </div>

        <div class="volume-fav">
            <button id="likeBtn"><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-list"></i></button>
            <button><i class="fas fa-volume-up"></i></button>
            <input type="range" id="volumeControl" min="0" max="100" value="50">
        </div>
    </div>
</div>
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

    let isPlaying = false;
        let isShuffle = false;
        let isRepeat = false;
        let isLiked = false;
        let progressInterval;
        let currentTime = 0;
        const totalTime = 192; // Total time in seconds (3 minutes 12 seconds)

        const playPauseBtn = document.getElementById('playPauseBtn');
        const playIcon = document.getElementById('playIcon');
        const progressBar = document.getElementById('progress');
        const currentTimeEl = document.getElementById('currentTime');
        const totalTimeEl = document.getElementById('totalTime');
        const shuffleBtn = document.getElementById('shuffleBtn');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const repeatBtn = document.getElementById('repeatBtn');
        const likeBtn = document.getElementById('likeBtn');
        const volumeControl = document.getElementById('volumeControl');

        playPauseBtn.addEventListener('click', function() {
            if (isPlaying) {
                pauseMusic();
            } else {
                playMusic();
            }
        });

        function playMusic() {
            isPlaying = true;
            playIcon.classList.remove('fa-play-circle');
            playIcon.classList.add('fa-pause-circle');

            progressInterval = setInterval(() => {
                currentTime++;
                if (currentTime >= totalTime) {
                    clearInterval(progressInterval);
                    if (isRepeat) {
                        currentTime = 0;
                    } else {
                        pauseMusic();
                    }
                } else {
                    updateProgress();
                }
            }, 1000);
        }

        function pauseMusic() {
            isPlaying = false;
            playIcon.classList.remove('fa-pause-circle');
            playIcon.classList.add('fa-play-circle');
            clearInterval(progressInterval);
        }

        function updateProgress() {
            const progressPercent = (currentTime / totalTime) * 100;
            progressBar.style.width = ${progressPercent}%;

            // Update time display
            currentTimeEl.textContent = formatTime(currentTime);
        }

        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return ${mins}:${secs < 10 ? '0' : ''}${secs};
        }

        // Shuffle Button
        shuffleBtn.addEventListener('click', function() {
            isShuffle = !isShuffle;
            this.classList.toggle('active');
            console.log(isShuffle ? 'Shuffle On' : 'Shuffle Off');
        });

        // Previous Button (Go back to the start of the current song)
        prevBtn.addEventListener('click', function() {
            currentTime = 0;
            updateProgress();
        });

        // Next Button (Skip to next song)
        nextBtn.addEventListener('click', function() {
            currentTime = 0;
            updateProgress();
            console.log('Skipped to next song');
        });

        // Repeat Button
        repeatBtn.addEventListener('click', function() {
            isRepeat = !isRepeat;
            this.classList.toggle('active');
            console.log(isRepeat ? 'Repeat On' : 'Repeat Off');
        });

        // Like Button (Toggle like/unlike)
        likeBtn.addEventListener('click', function() {
            isLiked = !isLiked;
            this.classList.toggle('active');
            console.log(isLiked ? 'Added to favorites' : 'Removed from favorites');
        });

        // Volume Control
        volumeControl.addEventListener('input', function() {
            console.log('Volume: ' + this.value);
        });
</script>
</html>