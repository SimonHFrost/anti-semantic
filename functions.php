<!-- url loosely matches categories and is used for filtering -->

<?php
    function getUrl() {
        if(strpos($_SERVER['REQUEST_URI'], 'past') !== false){
            return 'past';
        } else {
            return 'upcoming';
        }
    }
?>