<?php
/**
 * Created by PhpStorm.
 * User: Frost Wong <frostwong@gmail.com>
 * Date: 8/7/16
 * Time: 12:12 PM
 */

namespace Dao;


use Papper\DB;

class Base
{
    protected $db = null;

    public function __construct()
    {
        $this->db = new DB();
    }
}