<?php
// -----------------------------------------------------
// Created by : tool
// -----------------------------------------------------
// Date: 2021/5/21
// -----------------------------------------------------
// User: tf <1096392101@qq.com>
// -----------------------------------------------------
declare (strict_types=1);

namespace Gao\tool\helper;


class Service
{

    /**
     * 获取当前协议
     * @return string
     */
    public static function getHttpProtocol(): string
    {
        return ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
    }

    /**
     * 服务器系统
     * @return string
     */
    public static function getOS(): string
    {
        if(PATH_SEPARATOR == ':'){
            return 'Linux';
        }else{
            return 'Windows';
        }
    }


}