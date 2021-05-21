<?php
declare (strict_types=1);
/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/21
 * Time: 9:57
 */

namespace Gao\tests\tool;


use Gao\tool\plugin\snowflake\Snowflake;
use phpDocumentor\Reflection\Types\True_;
use PHPUnit\Framework\TestCase;

class SnowflakeTest extends TestCase
{

    public function testSnowflake()
    {
        $snowflake = new Snowflake();
        $snowflake = new Snowflake(12345,67891);//工作机器id
        $snowflake->setStartTimeStamp(strtotime('2020-09-09')*1000);

        $this->assertTrue(true,true);
    }
}