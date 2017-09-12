<?php

class input{
    function post($key)
    {
    	// 如果没有值，返回false
    	if (isset($_POST[$key])===false) {
    		return false;
    	}
    	$val=$_POST[$key];
    	// 代码的恶意过滤
    	// 代码的黄赌毒字符的检查
    	return $val;
    }

    function get($key)
    {
    	if (isset($_GET[$key])===false) {
    		return false;
    	}elseif(isset($_GET[$key]) && $_GET[$key]!=''){
            $val=$_GET[$key];
        }
    	// 代码的恶意过滤
    	// 代码的黄赌毒字符的检查
    	return $val;
    }

}










?>