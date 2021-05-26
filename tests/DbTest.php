<?php
// -----------------------------------------------------
// Created by : tool
// -----------------------------------------------------
// Date: 2021/5/24
// -----------------------------------------------------
// Time: 18:04
// -----------------------------------------------------
// User: tf <1096392101@qq.com>
// -----------------------------------------------------
declare (strict_types=1);

namespace Gao\tests\tool;


use Gao\tool\db\mysqlPdo;
use PHPUnit\Framework\TestCase;

class DbTest extends TestCase
{

    public function testDb()
    {
        $mysql = new mysqlPdo();
        $res = $mysql->findAll();
    }
}