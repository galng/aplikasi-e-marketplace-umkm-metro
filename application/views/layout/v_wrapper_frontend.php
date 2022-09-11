<?php

//cek proteksi halaman
$this->login_pembeli->proteksi_halaman_pembeli();

//wajib urut
require_once('v_head.php');
require_once('v_head_frontend.php');
require_once('v_nav_frontend.php');
require_once('v_content.php');
require_once('v_footer_frontend.php');
