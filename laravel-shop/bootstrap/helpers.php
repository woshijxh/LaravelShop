<?php
/**
 * Created by PhpStorm.
 * User: jxh
 * Date: 2019-04-25
 * Time: 16:03
 */

/**
 * 将当前请求的路由名称转换为 CSS 类名称
 * @return mixed
 */
function route_class() {
    // currentRouteName() 获取路由名称
    return str_replace('.', '-', Route::currentRouteName());
}
