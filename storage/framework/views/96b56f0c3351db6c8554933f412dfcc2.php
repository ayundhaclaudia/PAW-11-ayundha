<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body class="bg-dark text-white">
    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center p-3 border-bottom border-secondary">
        <div class="d-flex align-items-center">
            <img src="https://tse4.mm.bing.net/th?id=OIP.Bmk4Jvs-RwNNXYuIhE1SWwHaHa&pid=Api&P=0&h=180" alt="Spotify Logo" width="40" class="me-3">
            <button class="btn btn-dark"><i class="bi bi-house-door-fill"></i></button>
            <input type="text" class="form-control ms-3" placeholder="What do you want to play?" style="width: 300px;">
        </div>
        <div>
            <button class="btn btn-outline-light me-2">Sign up</button>
            <button class="btn btn-light">Log in</button>
        </div>
    </header>

    <div class="container py-4">
        <!-- Sidebar -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h4">Your Library</h1>
            <button class="btn btn-outline-light">Create Playlist</button>
        </div>

        <h2 class="h5 mb-3">Populer Artist</h2>
        <div class="d-flex overflow-auto">
            <?php
            // Dummy data untuk artist
            $artists = [
                ["name" => "Bernadya", "image" => "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01j1crd4pmea9697b163ka6qkn.jpg"],
                ["name" => "Mahalini", "image" => "https://lastfm.freetls.fastly.net/i/u/ar0/e319c808bb2538b77e02cb667c1f7394.jpg"],
                ["name" => "Juicy Luicy", "image" => "https://cdn.rri.co.id/berita/96/images/1665928337-channels4_profile.jpg"],
                ["name" => "Tulus", "image" => "https://i.scdn.co/image/ab677762000056b8e0f895667e852ed8a3d3af23"],
                ["name" => "Last Child", "image" => "https://i.scdn.co/image/46673d82310993970a90bc3e8e9e928441c017b8"],
            ];
            foreach ($artists as $artist) {
                echo '
                <div class="text-center me-3">
                    <img src="'.$artist["image"].'" class="rounded-circle mb-2" width="140" height="140" alt="'.$artist["name"].'">
                    <p class="mb-0">'.$artist["name"].'</p>
                    <small>Artist</small>
                </div>';
            }
            ?>
        </div>

        <h2 class="h5 mt-4 mb-3">Popular Albums</h2>
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <?php
            // Dummy data untuk album
            $albums = [
                ["name" => "Bulger Hidup", "image" => "https://jabarekspres.com/wp-content/uploads/2023/07/Snapinsta.app_331014145_1145159569481479_3828624706644489124_n_1080.jpg"],
                ["name" => "Fabula", "image" => "https://images.genius.com/51ee6f1ec7a0ca99b67fe25ba1392f34.1000x1000x1.jpg"],
                ["name" => "Nonfiksi", "image" => "https://is1-ssl.mzstatic.com/image/thumb/Music221/v4/26/0c/be/260cbe21-9d2d-a2ab-3391-f8fde6ad6840/198704005169_Cover.jpg/1200x1200bf-60.jpg"],
                ["name" => "Blue Faces", "image" => "https://1.bp.blogspot.com/-diCktJt8OcU/XrB-0tyPZHI/AAAAAAAAAf8/MOZespbO4-sSj5YTlx1zyLTeuTbGqRcWwCLcBGAsYHQ/s1600/the-weeknd-album-cover-nabil-starboyjpg.jpg"],
            ];
            foreach ($albums as $album) {
                echo '
                <div class="col">
                    <img src="'.$album["image"].'" class="img-fluid rounded" alt="'.$album["name"].'">
                    <p class="mt-2 mb-0 text-center">'.$album["name"].'</p>
                </div>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\ADMIN\Documents\Ayundha\LARAVEL\Praktikum1\resources\views/pawpaw.blade.php ENDPATH**/ ?>