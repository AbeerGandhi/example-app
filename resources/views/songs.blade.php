<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }

        h1, h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        audio {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Song Page</h1>
    </header>

    <section>
        <img src="song_image.jpg" alt="Song Cover Image">
        <h1>Song Title</h1>
        <p><strong>Artist:</strong> Artist Name</p>
        <p><strong>Album:</strong> Album Name</p>
        <p><strong>Release Year:</strong> 2023</p>

        <audio controls>
            <source src="song.mp3" type="audio/mp3">
            Your browser does not support the audio tag.
        </audio>
    </section>

    <table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->title }}</td>
<td>{{ $song->artist }}</td>
</tr>
@endforeach
</table>


</body>
</html>

