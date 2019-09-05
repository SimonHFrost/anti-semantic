<?php
    /* url loosely matches categories and is used for filtering */

    function getUrl() {
        return 'past';
        if(strpos($_SERVER['REQUEST_URI'], 'past') !== false){
            return 'past';
        } else {
            return 'upcoming';
        }
    }
?>