﻿<?php
     @$conn=mysql_connect("127.0.0.1","账号","数据库密码") or die("数据库连接失败".mysql_error());
     @mysql_select_db("某个数据库",$conn) or die("找不到数据库".mysql_error());
     @mysql_query("set character set utf8");
     @mysql_query("set names utf8");
?>
