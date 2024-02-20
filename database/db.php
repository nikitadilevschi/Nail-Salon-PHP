<?php
require("connect.php");
session_start();
global $db1;
global $db2;


define("ROOT_PATH", realpath(dirname(__FILE__)));

global $booking_system;
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}


function get_employees_all($table, $params = [])
{
    global $db1;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . "WHERE $key=$value";
            } else {
                $sql = $sql . "AND $key=$value";
            }
            $i++;
        }
    }

    $query = $db1->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}


function get_services_all($table, $params = [])
{
    global $db2;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . "WHERE $key=$value";
            } else {
                $sql = $sql . "AND $key=$value";
            }
            $i++;
        }
    }

    $query = $db2->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function selectOne($db, $table, $where)
{
    $sql = "SELECT * FROM `$table` WHERE ";
    $values = array();
    foreach ($where as $key => $value) {
        $sql .= "`$key` = ? AND ";
        $values[] = $value;
    }
    $sql = rtrim($sql, "AND ");
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    dbCheckError($stmt);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


function insert($db, $table, $params)
{
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . "'" . "$value" . "'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table($coll) VALUES ($mask)";
    $query = $db->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $db->lastInsertId();
}


//$arrData = [
//    'first_name' => 'Ina ',
//    'last_name' => 'Dilevschi',
//    'role' => 'CEO',
//    'img' => 'assets/img/team_1.jpg'
//];
//
//insert($db2, 'services', $arrData);

function update($db, $table, $id, $params)
{
    $i = 0;
    $str = '';

    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . "= '" . $value . "'";
        } else {
            $str = $str . "," . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $db->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

//update($db1,'employees', '1', $arrData);

function delete($db, $table, $id)
{

    $sql = "DELETE FROM $table WHERE  id = " . $id;
    $query = $db->prepare($sql);
    $query->execute();
    dbCheckError($query);
}
