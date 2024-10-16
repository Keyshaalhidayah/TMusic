<!-- resources/views/create-playlist.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    color: white;
    padding: 20px;
}

.playlist-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.playlist-cover {
    width: 150px;
    height: 150px;
    background-color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    margin-right: 20px;
}

.playlist-cover i {
    font-size: 64px;
    color: #bbb;
}

.playlist-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.playlist-public {
    font-size: 14px;
    color: #b3b3b3;
    margin-bottom: 10px;
}

.playlist-info h1 {
    font-size: 48px;
    margin-bottom: 10px;
}

.playlist-owner {
    font-size: 14px;
    color: #b3b3b3;
}

.playlist-actions {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}

.playlist-actions button {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    margin-right: 20px;
    cursor: pointer;
}

.playlist-actions button:hover {
    color: #1db954;
}

.container {
    background-color: #1e1e1e;
    padding: 20px;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #b3b3b3;
    border-radius: 5px;
    background-color: #282828;
    color: white;
}

button[type="submit"] {
    background-color: #AD49E1;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #151515;
    box-shadow: 0 4px 15px #AD49E1;
}
</style>
<body>

<div class="playlist-header">
    <div class="playlist-cover">
        <i class="fas fa-music"></i>
    </div>
    <div class="playlist-info">
        <span class="playlist-public">Playlist Publik</span>
        <h1>Create a New Playlist</h1>
        <span class="playlist-owner">keysha •</span>
    </div>
</div>

<div class="playlist-actions">
    <button><i class="fas fa-download"></i></button>
    <button><i class="fas fa-plus"></i></button>
    <button><i class="fas fa-user"></i></button>
    <button><i class="fas fa-ellipsis-h"></i></button>
</div>

<div class="container">
    <form action="{{ route('store.playlist') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="playlistName">Playlist Name</label>
            <input type="text" id="playlistName" name="playlist_name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">Create Playlist</button>
    </form>
</div>

</body>
</html>
