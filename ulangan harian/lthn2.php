<?php
function pesertadidik($noSiswa, $kondisi, $k1, $k2, $k3, $k4, $k5, $k6, $k7,){
    for($noSiswa; $noSiswa <= $kondisi; $noSiswa++ ){
        if($noSiswa == $k1 || $noSiswa == $k2 || $noSiswa == $k6 ){
            echo "Peserta Didik no $noSiswa tidak hadir </br>";}
        else if($noSiswa == $k3 || $noSiswa == $k4 ){
            echo "Peserta Didik no $noSiswa terlambat </br>";}
        else if($noSiswa == $k5 || $noSiswa == $k7 ){
            echo "Peserta Didik no $noSiswa sakit </br>";}
        else{echo "Peserta Didik no $noSiswa hadir </br>";}
    }
}
echo pesertadidik( 1, 15, 2 ,3, 6 ,8 ,9 ,10 ,13);
?>