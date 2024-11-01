<?php

require_once 'classes/AutoCarRPL.php';
require_once 'classes/Mio.php';

$autoCar = new AutoCarRPL("Bensin", 120);
$autoCar->start();
$autoCar->drive();

$mio = new Mio("Bensin", 60);
$mio->start();
$mio->drive();

