<?php 

    function nav_links(){
        global $page;
        if($page == "index"){
            echo null;
        }else if($page == "secondary"){
            echo "../";
        }
    }

?>