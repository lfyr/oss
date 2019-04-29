<?php
    /**
    * 验证手机号是否正确
    * @author 
    * @param INT $mobile
    */
    //电话验证
    function isMobile($mobile) {
        if (!is_numeric($mobile)) {
            return false;
        }
        return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
    }
    //身份证号验证
    function idcard_checksum($idcard){
        if(strlen($idcard)!=18){
            return false;
        }else{
            return true;
        }
    }


?>