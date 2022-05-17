<?php
class Load{
    function view($filename, $data = null)
    {
        if (is_array($data)){
            extract($data);
        }

        include $filename.".php";
    }
}