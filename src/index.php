<?php
switch (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))
{
    case 'de': include "content.html"; break;     
    default:   include "content_en.html"; break; # English
} 
?>
