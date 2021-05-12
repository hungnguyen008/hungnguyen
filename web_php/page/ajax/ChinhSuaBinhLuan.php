<?php
$ketnoi=mysql_connect("localhost","root","");
if(!$ketnoi)
    echo "Kết nối thất bại";

mysql_select_db("banhang_php",$ketnoi);
mysql_query("set names utf8");

$csBinhLuan="UPDATE binhluan SET NoiDung='".$_POST["noidung"]."' WHERE MaBinhLuan='".$_POST["mabinhluan"]."'";

    if(mysql_query($csBinhLuan))
        echo "Chình sửa bình luận thành công";
    else
        echo "Đã xảy ra lỗi";
?>