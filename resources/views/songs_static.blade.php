<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Playlist</title>
    
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>
<div id="container">
        <div id="sidebar">
            <h2>Saved Playlists</h2>
            <ul>
                <li><a href="#">Playlist 1</a></li>
                <li><a href="#">Playlist 2</a></li>
                <li><a href="#">Playlist 3</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div id="header">
                <div>
                    <h1>Playlist Name</h1>
                    <p>Playlist by Artist</p>
                </div>
                <div>
                    <a href="#">Edit Playlist</a>
                    <a href="#">New Playlist</a>
                </div>
            </div>



            <table>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Song Title</th>
                        <th>Artist Name</th>
                        <th>Album Name</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($songs as $song)
	        <tr>
	        <td>1</td><br>
	        <td>{{ $song->title() }}</td>
    	    <td>{{ $song->artist() }}</td><br>
    	    <td>album1</td><br>
    	    <td>3:30</td><br>
   	        </tr>
	    @endforeach
                </tbody>
            </table>
            <form>
                <input type="text" placeholder="Playlist Name">
                <select>
                    <option value="">Select Song</option>
                    <option value="song1">Song 1</option>
                    <option value="song2">Song 2</option>
                    <!-- Add more options as needed -->
                </select>
                <button>Save</button>
            </form>
        </div>
        <div id="footer">
            <p>&copy; 2023 Your Website | <a href="#">About</a> | <a href="#">Contact</a></p>
        </div>
    </div>
</body>
</html>
