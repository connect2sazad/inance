<?php


include_once ___DB_CON___;

$conn = null;
get_conn();

function getStylesheets(){
    $stylesheets = '
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="'.get_site_url().'assets/css/bootstrap.css" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="'.get_site_url().'assets/css/font-awesome.min.css" />
  
    <!-- Custom styles for this template -->
    <link href="'.get_site_url().'assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="'.get_site_url().'assets/css/responsive.css" rel="stylesheet" />
    
    ';

    return $stylesheets;
}


function get_site_url(){
    return URI_URL;
}

function get_conn(){
    global $conn;

    $conn = mysqli_connect(HOST, USER, PASS) or die('Unable to connect!');
    mysqli_select_db($conn, DATABASE);
}














function SELECT($table_name){
    $query = "SELECT * FROM ".$table_name;
    return $query;
}

function WHERE($table_name, $condition){
    $query = "SELECT * FROM ".$table_name." WHERE ".$condition;
    return $query;
}

function runQuery($query){
    global $conn;
    return mysqli_query($conn, $query);
}

function queryObject($mysql_result){
    return mysqli_fetch_object($mysql_result);
}



function getMenus(){
    $menus = WHERE('menus', "is_active = 1");
    $menus = runQuery($menus);
    return $menus;
}












?>