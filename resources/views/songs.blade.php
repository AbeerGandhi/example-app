<!-- resources/views/songs.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
    <!-- Add any additional meta tags, stylesheets, or scripts as needed -->
</head>
<body>

    <header>
        <h1>Song List</h1>
        <!-- Add any header content or navigation here -->
    </header>

    <main>
        <section>
            <h2>Featured Songs</h2>
            <!-- Add content for featured songs -->
        </section>

        <section>
            <h2>All Songs</h2>
            <!-- Add content for a list of all songs -->
        </section>
    </main>

    <footer>
        <!-- Add footer content or links here -->
    </footer>

    <!-- Add any additional scripts or scripts at the end of the body if needed -->
<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->artist() }}</td>
</tr>
@endforeach
</table>

</body>
</html>
