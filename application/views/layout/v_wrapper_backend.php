<?php

//cek proteksi halaman
$this->user_login->proteksi_halaman();

//wajib urut
require_once('v_head.php');
require_once('v_head_backend.php');
require_once('v_nav_backend.php');
require_once('v_content.php');
require_once('v_footer_backend.php');
