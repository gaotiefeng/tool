<?php
// -----------------------------------------------------
// Created by : tool
// -----------------------------------------------------
// Date: 2021/5/21
// -----------------------------------------------------
// User: tf <1096392101@qq.com>
// -----------------------------------------------------
declare (strict_types=1);

namespace Gao\tool\plugin\snowflake;


interface SequenceResolver
{

    public function sequence(int $currentTime);

}