<?php 
    $mysqli = false;
    function connectDB() {
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "blog.db");
        $mysqli -> query("SET NAMES 'utf-8");
    }

    function disconnectDB() {
        global $mysqli;
        $mysqli -> close();
    }

    function getNews($limit) {
        global $mysqli;
        connectDB();
        $result = $mysqli -> query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit");
        disconnectDB();
        return resultToArray($result);
    }

    function resultToArray($result) {
        $array = array();
        while (($row = $result -> fetch_assoc()) != false)
        $array = $row;
        return $array;
    }
?>