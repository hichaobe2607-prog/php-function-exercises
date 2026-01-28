<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    return substr_count($chuoi, $kyTu);
}

echo demKyTuXuatHien("lap trinh php", "p");
