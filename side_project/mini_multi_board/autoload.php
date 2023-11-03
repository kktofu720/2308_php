<?php
// 자바스크립트 이벤트와 유사한 동작을 함

spl_autoload_register( function($path) {
    $path = str_replace("\\", "/", $path);

    require_once($path._EXTENSION_PHP);
});