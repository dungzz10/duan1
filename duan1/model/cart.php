<?php
    function loadall_thongke(){
        $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham1.id) as countsp, min(sanpham1.price) as minprice, max(sanpham1.price) as maxprice, avg(sanpham1.price) as avgprice";
        $sql.=" from sanpham1 left join danhmuc on danhmuc.id=sanpham1.iddm";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>