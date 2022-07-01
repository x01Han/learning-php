<?php

//unix times/ epoch time
//echo time();


//waktu dengan format
//echo date("l , d-M-Y");

//menghitung hari dengan 2 fungsi
//echo date("l , d-M-Y",time() - 60 * 60 * 24 * 3);

//untuk mengetahui waktu tgl lahir
echo date("l, d-M-Y", mktime(0, 0,0,6,28,1998));
?>