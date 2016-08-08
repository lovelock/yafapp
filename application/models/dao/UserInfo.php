<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 8/7/16
 * Time: 12:14 PM
 */

namespace Dao;


use Papper\SQLAssembler;

class UserInfo extends Base
{
    const TABLE = 'userinfo';

    public function fetchUserInfo($id)
    {
        $sql = "SELECT * FROM " . self::TABLE . " WHERE id > :id order by id desc limit :start, :range";
        return $this->db->fetchAssoc($sql, [
            'id' => $id,
            'start' => 0,
            'range' => 20,
        ]);
    }
}