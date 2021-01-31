<?php
namespace msimenic_20;

/**
 * @Entity @Table(name="ispitni_rok")
 **/
class Rok
{
    /** @Id @Column(type="integer") @GeneratedValue  **/
	private $sifra;

    /** @Column(type="date") @GeneratedValue  **/
    private $datum;

    /** @Column(type="string") **/
    private $kolegij;

    /** @Column(type="integer") @GeneratedValue  **/
	private $brojPrijavljenih;

	
	public function __construct($podaci=null)
	{
		if($podaci==null){
			return;
		}
		$this->sifra=$podaci->sifra;
		$this->datum=$podaci->datum;
		$this->kolegij=$podaci->kolegij;
		$this->brojPrijavljenih=$podaci->brojPrijavljenih;


	}

	public function getSifra(){
		return $this->sifra;
	}

	public function setSifra($sifra){
		$this->sifra = $sifra;
	}

	public function getDatum(){
		return $this->datum;
	}

	public function setDatum($datum){
		$this->datum = $datum;
	}

	public function getKolegij(){
		return $this->kolegij;
	}

	public function setKolegij($kolegij){
		$this->kolegij = $kolegij;
	}

	public function getBrojPrijavljenih(){
		return $this->brojPrijavljenih;
	}

	public function setBrojPrijavljenih($brojPrijavljenih){
		$this->brojPrijavljenih = $brojPrijavljenih;
	}

}