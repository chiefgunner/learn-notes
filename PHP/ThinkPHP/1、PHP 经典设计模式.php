<?php

//单例模式
class Site
{
    //属性
    public $name;
    //本类的静态实例
    protected static $instance = null;

 //禁用掉构造函数
    private function __construct($name = "PHP")
    {
        $this->name = $name;
    }
    //获取本类的实例
    public static function getInstance($name = "PHP")
    {
        if(! self::$instance instanceof self){
            self::$instance = new Site($name);
        }
        return self::$instance;
    }
}

//用工厂模式生成本类的单一实例

class Factory
{
    //创建指定类的实例
    public static function create()
    {
        return Site::getInstance("Hello PHP");
    }
}


//对象注册树
class Register
{
    //创建对象池
    protected static $object = [];
    //将对象注册到对象池中
    public static function set($alias,$obj)
    {
        self::$object[$alias] = $obj;
    }
    //将对象从对象池中取出
    public static function get($alias)
    {
        return self::$object[$alias];
    }
    //注销
    public static function _unset($alias)
    {
        unset(self::$object[$alias]);
    }
}

Register::set('site',Factory::create());

$site = Register::get('site');

var_dump($site);
$site->name;//

