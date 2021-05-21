<?php
declare (strict_types=1);
/**
 * Created by : PhpStorm
 * User: tiefeng
 * Date: 2021/5/18
 * Time: 17:07
 */

namespace Gao\tool\traits;


trait Single
{
    static private $instance;

    /** 防止使用new直接创建对象 */
    private function __construct(){}

    /** 防止使用clone克隆对象 */
    private function __clone(){}

    /** 当前类的静态 Single 实列是不会变 */
    static public function getInstance()
    {
        /** 判断$instance是否存在的对象，不是则创建*/
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /** 后期静态绑定 调用者决定 */
    static public function getStaticInstance()
    {
        if (!static::$instance instanceof static) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}