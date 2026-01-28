<?php
function kiemTraNamNhuan($nam) {
    return ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0));
}

$nam = 2024;
echo kiemTraNamNhuan($nam) ? "$nam là năm nhuận" : "$nam không phải năm nhuận";
