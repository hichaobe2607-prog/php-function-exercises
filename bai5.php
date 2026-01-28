<?php
function kiemTraSoNguyenTo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$n = 17;
echo kiemTraSoNguyenTo($n) ? "$n là số nguyên tố" : "$n không phải số nguyên tố";
