<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 15.09.2015
 * Time: 22:40
 */
class categories_model extends model
{
    public function get_categories()
    {
        $res = [];
//        $tmp = $this->get_by_field('parent', 0);
//        foreach ($tmp as $v) {
//            $res[$v['id']] = $v;
//        }
        $STH = $this->DBH->query('
        SELECT
            c2.id,
            c2.category_name as category_name,
            c1.category_name as parent_name,
            c1.id as parent_id
        FROM
            categories c1
                JOIN
            categories c2 ON c1.id = c2.parent
        ');
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $STH->fetch()) {
            if($row['parent_id']) {
                $res[$row['id']] = $row;
                $res[$row['id']]['category_name'] = $row['category_name'] . '(' . $row['parent_name'] . ')';
            }
        }
        return $res;
    }
}