<?php
include_once "includes/connect.php";



function redirect($page)
{
    echo "<script>window.open('$page','_self');</script>";
}

function message($msg)
{
    echo "<script>alert('$msg');</script>";
}

function insertData($table, $data)
{
    global $con;

    $col = implode(",", array_keys($data));
    $value = implode("','", array_values($data));
    $sql = "insert into $table ($col) value ('$value')";
    $run = mysqli_query($con, $sql);

    return $run;
}

function callingData($table, $cond = NULL)
{
    global $con;
    if ($cond == NULL) {
        $sql = "select * from $table";
    } else {
        $sql = "select * from $table where $cond";
    }


    $run = mysqli_query($con, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($run)) {
        $data[] = $row;
    }
    return $data;
}

//counting data

function countData($table, $cond = NULL)
{
    global $con;
    if ($cond == NULL) {
        $sql = "select * from $table";
    } else {
        $sql = "select * from $table where $cond";
    }

    $run = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run);
    return $count;
}


function protected_session($name, $redirect_page)
{
    if (!isset($_SESSION[$name])) {
        redirect($redirect_page);
    }
}
