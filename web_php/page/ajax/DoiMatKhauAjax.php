<?php
$ketnoi = mysqli_connect("localhost","root","","banhang_php");
if(!$ketnoi)
    echo "Kết nối thất bại";

// mysql_select_db("banhang_php",$ketnoi);
// mysql_query("set names utf8");

$ktTonTai="SELECT * FROM thanhvien WHERE TenDangNhap='".$_POST["tendangnhap"]."' and MatKhau='".$_POST["matkhaucu"]."'";
$truyvanktTonTai=$ketnoi->query($ktTonTai);
if(mysqli_num_rows($truyvanktTonTai) > 0)
{
    $thaydoiMatKhau="UPDATE thanhvien SET MatKhau='".$_POST["matkhaumoi"]."' WHERE TenDangNhap='".$_POST["tendangnhap"]."'";
    if($ketnoi->query($thaydoiMatKhau))
        echo "Đổi mật khẩu thành công";
    else
        echo "Xảy ra lỗi";
}
else
{
    echo "Mật khẩu không chính xác" ;
}

?>