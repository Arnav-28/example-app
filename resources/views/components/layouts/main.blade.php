<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>

<div id="container">

    <div id="sidebar">
        <h2>Saved Playlists</h2>
        <!-- Add your playlist links here -->
        <ul>
            <li><a href="#">Playlist 1</a></li>
            <li><a href="#">Playlist 2</a></li>
            <!-- Add more playlists as needed -->
        </ul>
    </div>

    <div id="main-content">

        <header>
            <div>
                <h1>Melody</h1>
                <p>Itni chocolaty kyu hai ???</p>
            </div>
            <div>
                <a href="#">Edit Playlist</a>
                <a href="#">New Playlist</a>
            </div>
        </header>

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
            <!-- Add more songs as needed -->
            </tbody>
        </table>

        

        <!-- Playlist form -->
        <form>
            <input type="text" placeholder="Playlist Name">
            <select>
                <option value="" selected disabled>Select a song</option>
                <!-- Add your song options dynamically here -->
                <option value="song1">Song 1</option>
                <option value="song2">Song 2</option>
                <!-- Add more songs as needed -->
            </select>
            <button type="button">Save Playlist</button>
        </form>
        

    </div>

</div>
<footer>
            <p>&copy; 2023 Your Company</p>
            <p><a href="#">About</a> | <a href="#">Terms of Service</a></p>
        </footer>
</body>
</html>

