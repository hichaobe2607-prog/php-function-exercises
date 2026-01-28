<?php
function chuyenDoiInHoa($chuoi) {
    return mb_strtoupper($chuoi);
}

echo chuyenDoiInHoa("hoc php");
