<?php

if (!function_exists('isFavoriteVacancie')) {
    function isFavoriteVacancie($id, $fav)
    {
        foreach ($fav as $f){
            if($f['id'] == $id){
                return true;
            }
        }
        return false;
    }
}
