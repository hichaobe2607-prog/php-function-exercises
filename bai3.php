<?php
function daoNguocChuoi($chuoi) {
    return strrev($chuoi);
}

$chuoi = "Hello PHP";
echo "Chuỗi đảo ngược của chuỗi $chuoi là: " . daoNguocChuoi($chuoi);
