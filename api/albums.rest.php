<?php

// load albums controller
require_once _core.'/controller/AlbumsController.class.php';
$albumsController = new AlbumsController();

$app->get("/albums", function () use ($albumsController) {
    
    $albums = $albumsController->GetAlbums();
    
    
    echo json_encode($albums);
});

$app->get("/album/:id", function ($id) use ($albumsController) {
    
    $album = $albumsController->GetAlbumById($id);
    
    
    echo json_encode($album);
});

?>