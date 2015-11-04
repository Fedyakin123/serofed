<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 15.09.2015
 * Time: 22:40
 */

class categories_model extends model
{
    public function get_categories($id = 0)
    {
        $get_one = ($id) ? ' WHERE c2.id = ' . $id : '';
        $res = [];
//        $tmp = $this->get_by_field('parent', 0);
//        foreach ($tmp as $v) {
//            $res[$v['id']] = $v;
//        }
        $STH = $this->DBH->query("
        SELECT
            c2.id,
            c2.category_name as category_name,
            c1.category_name as parent_name,
            c1.id as parent_id
        FROM
            categories c1
                JOIN
            categories c2 ON c1.id = c2.parent $get_one
        ;");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        if (!$id) {
            while ($row = $STH->fetch()) {
                if ($row['parent_id']) {
                    $res[$row['id']] = $row;
                    $res[$row['id']]['category_name'] = $row['parent_name'] . ' (' . $row['category_name'] . ')';
                }
            }
            return $res;
        } else {
            $row = $STH->fetch();
            $category_name =  $row['parent_name'] . ' (' . $row['category_name'] . ')';
            return $category_name;
        }
    }
    public function  get_parent_name($category_id)
    {
        $row = $this->get_by_field('id', $category_id);
        If ($row[0]['parent']) {
            $category_name = $row[0]['category_name'];
            $parent_name = $this->get_by_field('id',$row[0]['parent']);
            $parent_name = $parent_name[0]['category_name'];
            $name = ['category_name' => $category_name, 'parent_name' => $parent_name];
        } else {
            $name = ['parent_name' => $row[0]['category_name']];
        }
        return $name;
    }
}