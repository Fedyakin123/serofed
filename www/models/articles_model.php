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
    public function edit_article($key,$value)
    {
        $ph = "`$key`";
        $val = ":$key";
        $STH = $this->DBH->prepare("SELECT * FROM $this->table WHERE $ph = $val");
        $STH->execute(array(
            "$key"=>$value
        ));
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $res = [];
        while ($row = $STH->fetch()){
            $res[] = $row;
        }
        return $res;
    }
    public function get_sibling_articles($column, $val, $limited = false)
    {
        if ($limited){
            $lim = " LIMIT $limited";
        } else {
            $lim = '';
        }
        $query = "SELECT
                      art.id as id,
                      art.create_date as create_date,
                      cat.category_name as category_name,
                      art.article_name as article_name,
                      art.content as content,
                      cat.parent as parent
                   FROM
                      categories cat
                          JOIN
                      articles art ON cat.id = art.category_id
                   WHERE cat.parent = :parent$lim;";
        $STH = $this->DBH->prepare($query);
        $STH->execute(array('parent' => $val));
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $res = [];
        while ($row = $STH->fetch()){
            $res[] = $row;
        }
        return $res;
    }

}
