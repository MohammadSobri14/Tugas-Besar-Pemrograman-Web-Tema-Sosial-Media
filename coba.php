<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .gallery {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image {
            max-width: 100%;
            cursor: pointer;
        }

        .thumbnail-container {
            display: flex;
            margin-top: 10px;
        }

        .thumbnail {
            width: 50px;
            height: 50px;
            margin: 0 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>



<div class="gallery">
    <img src="img/Ellipse 1.png" alt="main-image" class="main-image">
    <div class="thumbnail-container">
        <img src="img/us.png" alt="thumbnail-1" class="thumbnail">
        <img src="img/us2.png" alt="thumbnail-2" class="thumbnail">
        <img src="img/us3.png" alt="thumbnail-3" class="thumbnail">
        <img src="img/us4.png" alt="thumbnail-4" class="thumbnail">
        <!-- Tambahkan thumbnail lainnya di sini -->
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var mainImage = document.querySelector(".main-image");
    var thumbnails = document.querySelectorAll(".thumbnail");

    thumbnails.forEach(function(thumbnail) {
        thumbnail.addEventListener("click", function() {
            // Ganti gambar utama dengan gambar thumbnail yang diklik
            mainImage.src = thumbnail.src;
        });
    });
});
</script>

</body>
</html>
