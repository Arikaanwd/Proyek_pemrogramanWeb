<?php

//fungsi tanggal inggris
function InggrisTgl($tanggal){
    $tgl = substr($tanggal,0,2);
    $bln = substr($tanggal,3,2);
    $thn = substr($tanggal,6,4);
    $awal = "$thn-$bln-$tgl";
    return $awal;
}

//function untuk format indo
function IndonesiaTgl($tanggal){
    $tgl = substr($tanggal,0,2);
    $bln = substr($tanggal,5,2);
    $thn = substr($tanggal,0,4);
    $awal = "$tgl-$bln-$thn";
    return $awal;
}

?>