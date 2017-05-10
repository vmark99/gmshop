<?php
/**
 * Created by PhpStorm.
 * User: Vikram
 * Date: 5/9/2017
 * Time: 11:45 PM
 */

function cloudinaryShow($publicID, $width, $height){
    return Cloudder::show($publicID, array("width"=>$width, "height"=>$height, "crop"=>"scale"));
}