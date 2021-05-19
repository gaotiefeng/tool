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
}