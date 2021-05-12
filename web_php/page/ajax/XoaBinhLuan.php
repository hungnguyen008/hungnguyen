<?php
$ketnoi = mysqli_connect("localhost","root","","banhang_php");
if(!$ketnoi)
    echo "Kết nối thất bại";

// mysql_select_db("banhang_php",$ketnoi);
// mysql_query("set names utf8");

$xoaBinhLuan="DELETE FROM binhluan WHERE MaBinhLuan='".$_POST["mabinhluan"]."'";

    if($ketnoi->query($xoaBinhLuan))
        echo "Xóa bình luận thành công";
    else
        echo "Đã xảy ra lỗi";
?>