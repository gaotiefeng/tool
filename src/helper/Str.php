<?php
// -----------------------------------------------------
// Created by : tool
// -----------------------------------------------------
// Date: 2021/5/21
// -----------------------------------------------------
// Time: 16:55
// -----------------------------------------------------
// User: tf <1096392101@qq.com>
// -----------------------------------------------------
declare (strict_types=1);

namespace Gao\tool\helper;


class Str
{
    /**
     * 字符串截取
     *
     * @param string $str
     * @param int $start
     * @param int $length
     * @param string $encode
     * @return string
     */
    public static function substr(string $str, int $start, int $length, string $encode = 'UTF-8'): string
    {
        return mb_substr($str,$start,$length,$encode);
    }

    /**
     * 字符串转小写
     *
     * @param  string $value
     * @return string
     */
    public static function lower(string $value): string
    {
        return mb_strtolower($value, 'UTF-8');
    }

    /**
     * 字符串转大写
     *
     * @param  string $value
     * @return string
     */
    public static function upper(string $value): string
    {
        return mb_strtoupper($value, 'UTF-8');
    }

    /**
     * 获取字符串的长度
     *
     * @param  string $value
     * @return int
     */
    public static function length(string $value): int
    {
        return mb_strlen($value);
    }
}