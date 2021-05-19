<?php
declare (strict_types=1);

/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/19
 * Time: 13:19
 */


class TraitsTest extends \PHPUnit\Framework\TestCase
{

    public function testSingle()
    {
        $str = \Gao\tests\tool\Text::getStaticInstance()->text();

        $json = \Gao\tests\tool\Json::getStaticInstance()->json();

        $this->assertEquals("123456",$str);

        $this->assertEquals(json_encode([123456]),$json);
    }

}