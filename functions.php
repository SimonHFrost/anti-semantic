<?php 
    function getUrl() {
        if(strpos($_SERVER['REQUEST_URI'], 'past') !== false){
            return 'past';
        } else {
            return 'upcoming';
        }
    }
?>