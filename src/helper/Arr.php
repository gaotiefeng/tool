<?php
declare (strict_types=1);
/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/19
 * Time: 15:18
 */

namespace Gao\tool\helper;


class Arr
{
    /**
     * 返回数组中所有的键名
     * @param $array
     * @return int[]|string[]
     */
    public static function keys($array)
    {
        return array_keys($array);
    }

    /**
     * 数组中的key来取 交集
     * @param $array
     * @param $keys
     * @return array
     */
    public static function only_intersect_key($array, $keys): array
    {
        return array_intersect_key($array, array_flip((array) $keys));
    }

}