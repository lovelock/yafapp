<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 8/7/16
 * Time: 12:16 PM
 */

namespace Service;


use Dao\UserInfo;

class User
{
    private $daoUserInfo;

    public function __construct()
    {
        $this->daoUserInfo = new UserInfo();
    }

    public function getUserName($id)
    {
        return $this->daoUserInfo->fetchUserInfo();
    }
}