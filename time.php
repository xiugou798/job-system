<?php
/**
 *需要先设置时区
 */
    //两种设置时区的方法

    ini_set('date.timezone', 'GMT');
    echo '当前的格林尼治时间为:'.date('Y-m-d H:i:s',time()).'<br>';

    date_default_timezone_set('Asia/Chongqing');
    echo date('Y-m-d H:i:s',time());

?>