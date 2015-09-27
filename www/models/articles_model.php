<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 23.09.2015
 * Time: 3:41
 */
class articles_model extends model
{
    public function delete_article($key,$value)
    {
        $ph = "`$key`";
        $val = ":$key";
        $STH = $this->DBH->prepare("DELETE FROM $this->table WHERE $ph = $val");
        $STH->execute(array(
            "$key"=>$value
        ));
    }
}
