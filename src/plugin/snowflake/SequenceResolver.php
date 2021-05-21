<?php
declare (strict_types=1);
/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/21
 * Time: 9:43
 */

namespace Gao\tool\plugin\snowflake;


interface SequenceResolver
{

    public function sequence(int $currentTime);

}