<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NicePDO
 *
 * @author pabhoz
 */
class NicePDOFacade {

    private static $pdo;

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        self::$pdo = new PDO($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=utf8', $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {
        $sth = self::$pdo->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    public function insert($table, $data) {
        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = self::$pdo->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        //print_r($sth);
        try {
            $r = $sth->execute();
        } catch (PDOException $e) {
            $r = $e->getMessage();
        }
        return $r;
    }

    public function update($table, $data, $where) {

        ksort($data);

        $fieldDetails = NULL;
        foreach ($data as $key => $value) {
            $fieldDetails .= "$key=:$key,";
        }

        $fieldDetails = rtrim($fieldDetails, ',');

        $sth = self::$pdo->prepare("UPDATE $table SET $fieldDetails WHERE $where");


        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        //print_r($sth);
        try {
            $r = $sth->execute();
        } catch (PDOException $e) {
            $r = $e->getMessage();
        }

        return $r;
    }

    public function delete($table, $where, $limit = 1) {
        return self::$pdo->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }

}
