<?php

function agacOlustur($dizi, $ustKategori = 0)
{
    $dal = array();
    foreach ($dizi as $eleman) {
        
        if ($eleman['ust_kategori'] == $ustKategori) {

            $alt = agacOlustur($dizi, $eleman['id']);
            if ($alt) {
                $eleman['alt'] = $alt;
            } else {
                $eleman['alt'] = array();
            }
            $dal[] = $eleman;
        }
    }
    return $dal;
}

// Kategorileri hiyerarşik bir şekilde yazdırmak için örnek fonksiyon.
function yazdir($dizi){
    
    echo '<ul>';
        foreach ($dizi as $kategori){
            echo '<li>'.$kategori['cagtegory_name'].'</li>';
            if($kategori['alt'])
                yazdir($kategori['alt']);
        }
    echo '</ul>';
}

/*
Bu fonksiyon istenilen kategoriye ait tüm altkategorilerin ıd'lerini verir. 
Amaç ürün veya içerik listelerken ana kategori altındaki tüm kategorilere ait
içeriği listeleme
*/
function altId($dizi, $ustKategori = 3)
{
    $altIdler = array();
    foreach ($dizi as $eleman) {
        if ($eleman['ust_kategori'] == $ustKategori) {

            $alttanCek = altId($dizi,$eleman['id']);
            if($alttanCek){
                $altIdler = array_merge($altIdler,$alttanCek);
            }
            $altIdler[] = $eleman['id'];
        }
    }
    return $altIdler;
}
