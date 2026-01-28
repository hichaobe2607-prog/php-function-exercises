<?php
function kiemTraChanLe($n) {
    return ($n % 2 == 0) ? "chẵn" : "lẻ";
}

$n = 7;
echo "Số $n là số " . kiemTraChanLe($n);
