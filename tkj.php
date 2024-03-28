<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'beranda';
switch ($module) {
    case 'beranda': default:
        include('beranda.php');
        break;
    case 'profil':
        include('profil.php');
        break;
    case 'profil1':
        include('profil1.php');
        break;
    case 'profiltekaje':
        include('profiltekaje.php');
        break;
    case 'server':
        include('server.php');
        break;
    case 'webdev':
        include('web.php');
        break;
    case 'Reguler':
        include('reguler.php');
        break;
    case 'tahfidz':
        include('tahfidz.php');
        break;
    case 'kontak':
        include('kontak.php');
        break;
    case 'tentang kami':
        include('tentang-kami.php');
        break;
}
