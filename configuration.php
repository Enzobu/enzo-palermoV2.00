<?php

const MAPPING = [
    '' => 'php/index.php',
    'login' => 'php/login.php',
    'contact' => 'php/contact.php',
    'cv' => 'php/cv.php',
    '404' => 'php/404.php'
];

function getFileFromUrl(){
    $url = getVar('url');
    if(is_bool($url)){
        $url = '';
    }
    if(!array_key_exists($url, MAPPING)){
        $url = '404';
    }
    return MAPPING[$url];
}

function getVar($name) {
    return retrieveVar($name, $_GET);
}
function postVar($name) {
    return retrieveVar($name, $_POST);
}
function sessionVar($name) {
    return retrieveVar($name, $_SESSION);
}
function retrieveVar($name, $tab){
    if (isset($tab[$name])) {
        if (! empty($tab[$name])) {
            return $tab[$name];
        }
        return TRUE;
    }
    return FALSE;
}