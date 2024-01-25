<?php

function DaftarHotelPermalam($nama, $nowa, $alamat, $jenisKamar, $harga, $waktu, $diskon, $total, $status){
    echo "
    ===Program Reservasi Hotel Sederhana=== <br/>
    Nama Pemesan : $nama <br/>
    Nomor Whatsapp : $nowa <br/>
    Alamat : $alamat <br/>
    Tipe Kamar : $jenisKamar <br/>";

    if($jenisKamar == "Deluxe"){
        $hargakamar = 200000;

        if($waktu > 4){
            $totalharga = $hargakamar * $waktu * 0.5;
            $diskon = "50%";
        }
        else{
            $totalharga = $hargakamar * $waktu;
            $diskon = "0";
        }
    }elseif($jenisKamar == "Superior"){
        $hargakamar = 400000;

        if($waktu > 4){
            $totalharga = $hargakamar * $waktu * 0.35;
            $diskon = "35%";
        }
        else{
            $totalharga = $hargakamar * $waktu;
            $diskon = "0";
        }
    }else{
        $hargakamar = 800000;

        if($waktu > 4){
            $totalharga = $hargakamar * $waktu * 0.25;
            $diskon = "25%";
        }
        else{
            $totalharga = $hargakamar * $waktu;
            $diskon = "0";
        }
    }

    if ($status == "Waiting") {
        $warna = "yellow";
    } elseif ($status == "Check In") {
        $warna = "green";
    } else {
        $warna = "Red"; 
    }
    echo "
    Harga per Malam : Rp ".number_format($hargakamar)." <br/>
    Lama Menginap : $waktu <br/>
    Diskon : Rp $diskon <br/>
    Total Harga : Rp ".number_format($totalharga)." <br/>
    Status : <span style='color: $warna;'>$status</span>";
}

    global $totalharga, $diskon, $hargakamar, $harga;
    
    echo  DaftarHotelPermalam("kojoyy", "0858-9362-6629", "jl. Thamrincity", "Deluxe", $hargakamar, 10, $diskon, $totalharga, "Chek In")
?>