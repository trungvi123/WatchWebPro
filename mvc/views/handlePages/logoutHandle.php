<?php
    if( isset($_SESSION['user']) ){
        unset($_SESSION['user']);
        header('Location: http://localhost/WatchWebPro/');
    }else if(isset($_SESSION['AdUser'])){
        unset($_SESSION['AdUser']);
        header('Location: http://localhost/WatchWebPro/');
    }
?>