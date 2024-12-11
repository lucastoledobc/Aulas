<?php 

require_once "Video.php";

interface AcoesVideo {
    function play();
    function pause();
    function like();
}