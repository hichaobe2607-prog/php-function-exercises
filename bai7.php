<?php
function demSoTu($chuoi) {
    return str_word_count($chuoi);
}

echo demSoTu("Lap trinh PHP co ban");
