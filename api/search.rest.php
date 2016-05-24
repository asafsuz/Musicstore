<?php

// load albums controller
require_once _core.'/controller/SearchController.class.php';
$searchController = new SearchController();


$app->get("/search", function () use ($searchController, $app) {
    
    $albums = $searchController->GetAlbumsByQuery($app->request->get('q'));
    echo json_encode($albums);
});




?>