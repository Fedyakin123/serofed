<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 23:25
 */
class model
{
    public $DBH;
    public $table;

    public function __construct($table = null)
    {
        $this->table = $table;
        if(!$this->table) {
            $model_name = get_class($this);
            $arr = explode('_', $model_name);
            array_pop($arr);
            $this->table = implode('_', $arr);
        }
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
        $this->DBH = new PDO($dsn, DB_USER, DB_PASSWORD);
        $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->DBH->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_TO_STRING);
        $this->DBH->exec("SET sql_mode = ''");
        $this->DBH->exec("SET NAMES utf8");
    }

    public function get_all()
    {
        $STH = $this->DBH->query("SELECT * FROM $this->table ;");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $res = [];
        while ($row = $STH->fetch()) {
            $res[] = $row;
        }
        return $res;
    }

    public function insert($data)
    {
        $ph = '';
        $val = '';
        foreach ($data as $index => $value) {
            $ph .= "$index,";
            $val .= ":$index,";
        }
        $ph = trim($ph, ',');
        $val = trim($val, ',');
        $STH = $this->DBH->prepare("INSERT INTO $this->table ($ph) VALUES ($val)");
        return $last_id = $STH->execute($data) ? $this->DBH->lastInsertId() : false;
    }

    public function update($data, $id)
    {
        $placeholder='';
        foreach ($data as $index => $value) {
            $placeholder .= "$index = :$index,";
        }
        $placeholder = trim($placeholder, ',');
        $STH = $this->DBH->prepare("UPDATE $this->table SET $placeholder WHERE id = $id");
        $STH->execute($data);
        return $id = $STH->execute($data) ? $id : false;
    }

    public function get_by_field($key, $value, $limited = false)
    {
        if ($limited){
            $lim = " LIMIT $limited";
        } else {
            $lim = '';
        }
        $ph = "`$key`";
        $val = ":$key";
        $STH = $this->DBH->prepare("SELECT * FROM $this->table WHERE $ph = $val$lim;");
        $STH->execute(array(
            "$key"=>$value
        ));
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $res = [];
        while ($row = $STH->fetch()){
            $res[] = $row;
        } return $res;
    }
    public function get_by_fields($array)
    {
        $string = '';
        foreach ($array as $index => $value){
            $string .= "$index = :$index AND "; //можно добавить необязательный параметр,чтобы было OR
        }
        $string = trim($string,'AND ');
        $STH = $this->DBH->prepare("SELECT * FROM $this->table WHERE $string");
        $STH->execute($array);
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $res = [];
        while ($row = $STH->fetch()){
            $res[] = $row;
        }
        return $res;
    }
    public function get_by_field_limited($key, $value, $limit)
    {
        $ph = "`$key`";
        $val = ":$key";
        $STH = $this->DBH->prepare("SELECT * FROM $this->table WHERE $ph = $val LIMIT $limit");// как сделать используя placeholders?
        $STH->execute(array(
            "$key" => $value,
        ));
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $res = [];
        while ($row = $STH->fetch()) {
            $res[] = $row;
        } return $res;
    }
}

