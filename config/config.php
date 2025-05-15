<?php
// Pobieranie aktualnego katalogu bazowego

function homePageBaseUrl($base_url)
{
    global $base_url;
    return $base_url === "home" ? "" : "../";
}
