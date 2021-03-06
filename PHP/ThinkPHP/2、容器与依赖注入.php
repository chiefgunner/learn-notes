<?php

/**
 * 容器与依赖注入的原理
 * -----------------------
 * 1、任何的 url 访问，最终都是定位到控制器，由控制器中的具体方法去执行
 * 2、一个控制器对应着一个类，如果这些累需要进行统一管理，怎么办？-->容器
 *
 * 容器：进行类管理,还可以将类的实例（对象）作为参数，传递给方法，自动触发依赖注入
 * 依赖注入：将对象类型的数据,以参数的形式传递到方法的参数列表
 */
