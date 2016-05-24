<?php

Class SearchModel extends Model {

    public function GetAlbumsByQuery($query) {

        $albums = array(
            "suggestions"=>array()
        );
        
        
        $albumsRequest = $this->_db->query("SELECT * FROM `albums` WHERE `title` LIKE '%{$query}%'");
        if($albumsRequest) {
            
            while($album = $albumsRequest->fetch_assoc()) {
                $albums['suggestions'][] = array("value"=>$album['title'],"data"=>$album['id']);
            }
        }

        return $albums;
    }
}


?>