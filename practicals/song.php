<?php
/**
 * Class representing a Song with basic properties.
 */
class Song {
    // Properties
    private $title;
    private $artist;
    private $album;
    private $duration;

    /**
     * Song constructor.
     *
     * @param string $title    The title of the song.
     * @param string $artist   The artist of the song.
     * @param string $album    The album of the song.
     * @param int    $duration The duration of the song in seconds.
     */
    public function __construct($title, $artist, $album, $duration) {
        $this->title = $title;
        $this->artist = $artist;
        $this->album = $album;
        $this->duration = $duration;
    }

    /**
     * Get the title of the song.
     *
     * @return string The title of the song.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title The title of the song.
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get the artist of the song.
     *
     * @return string The artist of the song.
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Set the artist of the song.
     *
     * @param string $artist The artist of the song.
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Get the album of the song.
     *
     * @return string The album of the song.
     */
    public function getAlbum() {
        return $this->album;
    }

    /**
     * Set the album of the song.
     *
     * @param string $album The album of the song.
     */
    public function setAlbum($album) {
        $this->album = $album;
    }

    /**
     * Get the duration of the song.
     *
     * @return int The duration of the song in seconds.
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * Set the duration of the song.
     *
     * @param int $duration The duration of the song in seconds.
     */
    public function setDuration($duration) {
        $this->duration = $duration;
    }
}

// Example usage:
$song = new Song("Sample Song", "Sample Artist", "Sample Album", 180);
echo "Title: " . $song->getTitle() . PHP_EOL;
echo "Artist: " . $song->getArtist() . PHP_EOL;
echo "Album: " . $song->getAlbum() . PHP_EOL;
echo "Duration: " . $song->getDuration() . " seconds" . PHP_EOL;
?>

