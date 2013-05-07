<?php

if(empty($_REQUEST['p'])) { include "../content/home.php"; }
if($_REQUEST['p']=='home'){ include "../content/home.php"; }

switch($_REQUEST['p']){
case '' : include "../content/home.php"; break;
case 'home' : include "../content/home.php"; break;
case 'produk' : include "../content/produk.php"; break;
case 'ketentuan' : include "../content/ketentuan.php"; break;
case 'informasi' : include "../content/informasi.php"; break;
case 'contact' : include "../content/contact.php"; break;
case 'profil' : include "../content/profil.php"; break;
case 'daftar2' : include "session/daftar2.php"; break;
}

?>