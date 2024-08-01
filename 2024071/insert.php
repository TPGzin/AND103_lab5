<?php
// tất cả các biến đều có dấu $
// truy cập thuộc tính của đối tượng dùng dấu->
// nối chuối dùng dấu .
//printf : echo in ra màn hình
//b1 khai báo
$s="localhost"; $u="root"; $p=""; $db="a3";
//b2 kết nối 
$con=new mysqli($s,$u,$p,$db);
//b3 viết insert
//truyền tham số trước 
$MaSP=$_POST['MaSP'];//truyen tham so cho bien MaSP
$TenSP=$_POST['TenSP'];
$MoTa=$_POST['MoTa'];
$sql="INSERT into SanPham (MaSP,TenSP,MoTa) VALUES ('$MaSP','$TenSP','$MaSP')";
if($con->query($sql)===TRUE){
    
    echo "thanh cong";
}
else{
    
    echo "loi: ".con->error;
}
$con->close();
//http://localhost/000/2024071/insert1.php?MaSP=SP3&TenSP=san pham 333&MoTa=mo ta san pham 3333