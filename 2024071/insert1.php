<?php
$s="localhost"; $u="root"; $p=""; $db="a3";
$con=new mysqli($s,$u,$p,$db);
$sql="INSERT into sanpham (MaSP,TenSP,MoTa) VALUES ('name5','TenSP22','maSP')";
if($con->query($sql)===TRUE){
    
    echo "thanh cong";
}
else{
    
    echo "loi: ".$con->error;
}
$con->close();