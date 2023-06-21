<?php

include "app.php";

function includeTemplate(string $nombre,bool $inicio = false) {
    include Templates_URL."/${nombre}.php";
}

