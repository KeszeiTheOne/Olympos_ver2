<?php
class Organization extends Main{
	private $shortName,$regNum,$postalAdd,$faxNum,$webSite,$taxNum;
	public function __construct(array $var)
	{
		$this->setId($var[DBData::$mainUserID]);
		$this->setName($var[DBData::$mainUserName]);
		$this->setEmail($var[DBData::$emailDataAdd]);
		$this->setTelefon($var[DBData::$telefonDataNum]);
		$this->setPassword($var[DBData::$mainUserPass]);
		$this->setType($var[DBData::$mainUserType]);
	}
}