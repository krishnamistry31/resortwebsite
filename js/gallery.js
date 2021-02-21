function showPhotos() {
    if (document.getElementById('photos')) {
        if (document.getElementById('photos').style.display == 'none') {
            document.getElementById('photos').style.display = 'block';
            document.getElementById('videos').style.display = 'none';
        }
    }
}
function showVideos() {
    if (document.getElementById('videos')) {
        if (document.getElementById('videos').style.display == 'none') {
            document.getElementById('videos').style.display = 'block';
            document.getElementById('photos').style.display = 'none';
        }
    }
}
