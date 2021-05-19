<?php
declare (strict_types=1);
/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/19
 * Time: 13:29
 */

namespace Gao\tests\tool;


use Gao\tool\traits\Single;

class Json
{
    use Single;

    public function json()
    {
        return json_encode([123456]);
    }
}