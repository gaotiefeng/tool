<?php
declare (strict_types=1);

/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/19
 * Time: 13:20
 */

namespace Gao\tests\tool;

class Text
{
    use \Gao\tool\traits\Single;

    public function text()
    {
        return "123456";
    }
}