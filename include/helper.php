<?php

function redirect_to($location)
{
    header("Location: {$location}");
}


function clean($string) {
    return htmlentities(strip_tags(trim($string)));
}
