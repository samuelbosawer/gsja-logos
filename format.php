<?php
// Fungsi untuk format tanggal Indonesia
function format($tanggal) {
    $bulan = [
        1 => 'Januari', 
        'Februari', 
        'Maret', 
        'April', 
        'Mei', 
        'Juni', 
        'Juli', 
        'Agustus', 
        'September', 
        'Oktober', 
        'November', 
        'Desember'
    ];
    $tanggalArray = explode('-', $tanggal);
    return $tanggalArray[2] . ' ' . $bulan[(int)$tanggalArray[1]] . ' ' . $tanggalArray[0];
}

?>