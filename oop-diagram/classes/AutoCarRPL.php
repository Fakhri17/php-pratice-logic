<?php

require_once __DIR__ . '/../interfaces/Transportasi.php';
require_once 'Roda.php';
require_once 'Setir.php';
require_once 'Mesin.php';

class AutoCarRPL implements Transportasi
{
  private $bahanBakar;
  private $kecepatan;
  private $roda;
  private $mesin;
  private $setir;

  public function __construct($bahanBakar, $kecepatan)
  {
    $this->bahanBakar = $bahanBakar;
    $this->kecepatan = $kecepatan;
    $this->roda = [new Roda(), new Roda(), new Roda(), new Roda()]; // 4 roda
    $this->mesin = new Mesin();
    $this->setir = new Setir();
  }

  public function getBahanBakar()
  {
    return $this->bahanBakar;
  }

  public function getKecepatan()
  {
    return $this->kecepatan;
  }

  public function start()
  {
    echo "Mobil dimulai.\n";
  }

  public function drive()
  {
    echo "Mobil berjalan dengan kecepatan " . $this->kecepatan . " km/h.\n";
  }
}
