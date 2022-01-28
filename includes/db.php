<?php

    $connection = mysqli_connect(
        $config['db']['server'],
        $config['db']['username'],
        $config['db']['password'],
        $config['db']['name']
    );
    if($connection == false){
        echo mysqli_connect_error();
        exit();
    }

    function getAllNews(){
        global $connection;
        $news = mysqli_query($connection, 'SELECT * FROM `news`');
        $array = [];
        $i = 1;
        foreach($news as $item){
            $array[$i] = $item;
            $i++;
        }
        return $array;
    }

    function getNews($page) {
        global $connection;
        if($page){
            $start = $page * 5 - 5;
            $news = mysqli_query($connection, "SELECT * FROM news ORDER BY idate DESC LIMIT $start, 5");
            return $news;
        }
        $news = mysqli_query($connection, "SELECT * FROM news ORDER BY idate DESC LIMIT 5");
        return $news;
    }

    function getItemById($id) {
        global $connection;
        $news = mysqli_query($connection, "SELECT * FROM news WHERE id = $id");
        foreach($news as $item){
            return $item;
        }
    }



