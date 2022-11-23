<?php
    $role = 'subscribe2';
    $message = '';

    if('admin' === $role ){
        $message = 'welcome, Admin';
    }elseif('author' === $role){
        $message = 'welcome,Author';
    }elseif('subscribe' === $role){
        $message = 'welcome, Subscribe';
    }else{
        $message = 'Sorry';
    }
    print($message);
?>