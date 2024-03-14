<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); 

if ($lang == "de") {
    include index.html;
} else {
    include index_en.html;
}
?>