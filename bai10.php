<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    return explode($kyTuPhanCach, $chuoi);
}

print_r(tachChuoi("PHP,HTML,CSS,JS", ","));
