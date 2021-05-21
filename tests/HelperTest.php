<?php
declare (strict_types=1);

/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/19
 * Time: 10:36
 */
use PHPUnit\Framework\TestCase;
use Gao\tool\helper\Client;

class HelperTest extends TestCase
{
    public function testHelperClient()
    {
        $ip = Client::get_client_ip();
        $this->assertEquals("127.0.0.1",$ip);

    }

    public function testHelperService()
    {
        $http = \Gao\tool\helper\Service::getHttpProtocol();
        $this->assertEquals("http://",$http);

        $os = \Gao\tool\helper\Service::getOS();
        $this->assertEquals("Linux",$os);
    }

    public function testHelperArr()
    {
        $data = [1=>'12',2=>'2,3',3=>'3,4'];
        $this->assertEquals([1,2,3], \Gao\tool\helper\Arr::keys($data));
        $array1 = [2=>5,3=>4];
        $array2 = [2=>5,3=>4];
        $array3 = [2=>1,4=>4];
        $array4 = [2=>0,3=>4];
        $arr = \Gao\tool\helper\Arr::fill_keys($array1,"test");
        //var_dump($arr);
        $arr = \Gao\tool\helper\Arr::intersect_assoc($array1,$array2,$array4,$array3);
        //var_dump($arr);
        $arr = \Gao\tool\helper\Arr::intersect_key($array1,$array2,$array4,$array3);
        //var_dump($arr);
        $arr = \Gao\tool\helper\Arr::intersect($array1,$array2,$array4,$array3);
    }
}