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



class Arr
{
    /**
     * 数组中的key来取 交集
     * @param array $array
     * @param array $keys
     * @return array
     */
    public static function only_intersect_key(array $array, array $keys): array
    {
        return array_intersect_key($array, array_flip((array) $keys));
    }


    /**
     * 数组分割
     * @param array $array
     * @param int $length
     * @return array
     */
    public static function chunk(array $array, int $length): array
    {
        return array_chunk($array,$length);
    }

    /**
     * 返回数组中的指定列
     * @param array $array
     * @param string $key
     * @return array
     */
    public static function column(array $array,string $key): array
    {
        return array_column($array,$key);
    }

    /**
     * 创建数组 一个数组的值为key 另一个数组的值为value
     * @param array $keys
     * @param array $values
     * @return array
     */
    public static function combine(array $keys,array $values): array
    {
        return array_combine($keys,$values);
    }

    /**
     * 统计数组中的所有值
     * @param array $array
     * @return array  数组中值为key统计数为value
     */
    public static function count_values(array $array): array
    {
        return array_count_values($array);
    }

    /**
     * 索引检查计算数组的差集
     * @param array $array1
     * @param array $array2
     * @param mixed ...$array3
     * @return array
     */
    public static function diff_assoc(array $array1 , array $array2 , array ...$array3): array
    {
        return array_diff_assoc($array1, $array2, ...$array3);
    }

    /**
     * 用键名比较计算数组的差集
     * @param array $array1
     * @param array $array2
     * @param mixed ...$array3
     * @return array
     */
    public static function diff_key(array $array1 , array $array2 , array ...$array3): array
    {
        return array_diff_key($array1, $array2, ...$array3);
    }

    /**
     * 数组中的差集
     * @param array $array
     * @param mixed ...$arrays
     * @return array
     */
    public static function diff(array $array,array ...$arrays): array
    {
        return array_diff($array,...$arrays);
    }

    /**
     * 指定的key和value填充数组
     * @param array $keys
     * @param string $value
     * @return array
     */
    public static function fill_keys(array $keys,string $value): array
    {
        return array_fill_keys($keys,$value);
    }

    /**
     * 用给定的值填充数组
     * @param int $start_index
     * @param int $count
     * @param string $value
     * @return array
     */
    public static function fill(int $start_index, int $count, string $value): array
    {
        return array_fill($start_index, $count, $value);
    }

    /**
     * 交换数组中的key和value
     * @param array $array
     * @return array
     */
    public static function flip(array $array): array
    {
        return array_flip($array);
    }

    /**
     * 数组中的交集
     * @param array $array1
     * @param array $array2
     * @param mixed ...$array3
     * @return array
     */
    public static function intersect_assoc(array $array1, array $array2, array ...$array3): array
    {
        return array_intersect_assoc($array1, $array2, ...$array3);
    }

    /**
     * 使用key数组中的交集
     * @param array $array1
     * @param array $array2
     * @param mixed ...$array3
     * @return array
     */
    public static function intersect_key(array $array1, array $array2, array ...$array3): array
    {
        return array_intersect_key($array1, $array2, ...$array3);
    }

    /**
     * 计算数组的交集
     * @param array $array1
     * @param array $array2
     * @param mixed ...$array3
     * @return array
     */
    public static function intersect(array $array1, array $array2, array ...$array3): array
    {
        return array_intersect($array1, $array2, ...$array3);
    }

    /**
     * 检查数组里是否有指定的键名或索引
     * @param $key string | int
     * @param array $array
     * @return bool
     */
    public static function key_exists($key, array $array): bool
    {
        return array_key_exists($key,$array);
    }

    /**
     * 返回数组中第一个key
     * @param array $array
     * @return int|string|null
     */
    public static function key_first(array $array)
    {
        return array_key_first($array);
    }

    /**
     * 返回数组中最后一个key
     * @param array $array
     * @return int|string|null
     */
    public static function key_last(array $array)
    {
        return array_key_last($array);
    }

    /**
     * 返回数组中所有的键名
     * @param array $array
     * @return int[]|string[]
     */
    public static function keys(array $array)
    {
        return array_keys($array);
    }

    /**
     * 返回数组中所有的值
     * @param array $array
     * @return array
     */
    public static function values(array $array): array
    {
        return array_values($array);
    }

    /**
     * 递归合并一个或多个数组
     * @param mixed ...$array
     * @return array
     */
    public static function merge_recursive(array ...$array): array
    {
        return array_merge_recursive(...$array);
    }

    /**
     * 合并一个或多个数组 key相同被覆盖
     * @param mixed ...$array
     * @return array[]
     */
    public static function merge(array ...$array): array
    {
        return array_merge(...$array);
    }

    /**
     * 以指定长度将一个值填充进数组
     * @param array $array
     * @param int $size
     * @param $value
     * @return array
     */
    public static function pad(array $array, int $size, $value): array
    {
        return array_pad($array, $size, $value);
    }

    /**
     * 计算数组中所有值的乘积
     * @param array $array
     * @return float|int
     */
    public static function product(array $array)
    {
        return array_product($array);
    }

    /**
     * 数组中所有的和
     * @param array $array
     * @return float|int
     */
    public static function sum(array $array): int
    {
        return array_sum($array);
    }

    /**
     * 取出数组最后一个元素
     * @param array $array
     * @return array
     */
    public static function pop(array $array): array
    {
        return array_pop($array);
    }

    /**
     * 插入数组的尾部
     * @param array $array
     * @param string | int $value
     * @return int
     */
    public static function push(array $array,$value): int
    {
        return array_push($array,$value);
    }

    /**
     * 数组中随机取出 $num随机键
     * @param array $array
     * @param int $num
     * @return array|int|string
     */
    public static function rand(array $array,int $num)
    {
        return array_rand($array,$num);
    }

    /**
     * 使用传递的数组递归替换第一个数组的元素
     * @param array $array
     * @param mixed ...$arrays
     * @return array
     */
    public static function replace_recursive(array $array,array ...$arrays): array
    {
        return array_replace_recursive($array,$arrays);
    }

    /**
     * 使用后面的数组（key2=key1）替换第一个数据
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function relplace(array $array1, array $array2): array
    {
        return array_replace($array1, $array2);
    }

    /**
     * 返回单元顺序相反的数组
     * @param array $array
     * @param bool $preserve_keys key 是否发生变化
     * @return array
     */
    public static function reverse(array $array, bool $preserve_keys = false) : array
    {
        return array_reverse($array,$preserve_keys);
    }

    /**
     * 数组中搜索给定值
     * @param array $array
     * @param string $needle
     * @param bool $strict 类型校验
     * @return false|int|string
     */
    public static function search(array $array,string $needle,bool $strict)
    {
        return array_search($needle, $array, $strict);
    }

    /**
     * 数组开头元素移出
     * @param array $array
     * @return mixed|null
     */
    public static function shift(array $array)
    {
        return array_shift($array);
    }

    /**
     * 数组开头插入一个单元，或多个单元
     * @param array $array
     * @param mixed ...$value
     * @return int key
     */
    public static function unshift(array $array, ...$value): int
    {
        return array_unshift($array,$value);
    }

    /**
     * 数组中取出一段
     * @param array $array
     * @param int $offset
     * @param int $length
     * @param bool $preserve_keys
     * @return array
     */
    public static function slice(array $array, int $offset, int $length, bool $preserve_keys = false): array
    {
        return array_slice($array,$offset,$length,$preserve_keys);
    }

    /**
     * @param array $array
     * @param int $offset
     * @param int $length
     * @param array $replacement
     * @return array
     */
    public static function splice(array $array, int $offset, int $length, array $replacement = array()): array
    {
        return array_splice($array,$offset,$length,$replacement);
    }

    /**
     * 移出数组中重复的值
     * @param array $array
     * @return array
     */
    public static function unique(array $array): array
    {
        return array_unique($array);
    }

    /**
     * 数组中的个数
     * @param array $array
     * @return int
     */
    public static function count(array $array): int
    {
        return count($array);
    }

    /**
     * 数组中的当前值
     * @param array $array
     * @return false|mixed
     */
    public static function current(array $array)
    {
        return current($array);
    }

    /**
     * 将数组的内部指针指向第一个单元
     * @param array $array
     * @return false|mixed
     */
    public static function reset(array &$array)
    {
        return reset($array);
    }

    /**
     * 数组中的内容指针向前移动一位
     * @param array $array
     * @return false|mixed
     */
    public static function next(array &$array)
    {
        return next($array);
    }

    /**
     * 数组中的内容指针向后移动一位
     * @param array $array
     * @return false|mixed
     */
    public static function prev(array &$array)
    {
        return prev($array);
    }

    /**
     * 数组的内部指针指向最后一个单元
     * @param array $array
     * @return false|mixed
     */
    public static function end(array &$array)
    {
        return end($array);
    }

    /**
     * @param array $array
     * @return bool
     */
    public static function shuffle(array &$array): bool
    {
        return shuffle($array);
    }
}