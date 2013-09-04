<?php
class NG{
protected $state = array(1=>'Abia',2=>'Adamawa',3=>'Akwa Ibom',4=>'Anambra'
								5=>'Bauchi',5=>'Bayelsa',6=>'Benue',7=>'Borno',
								8=>'Cross River',9=>'Delta',10=>'Ebonyi',11=>'Edo',
								12=>'Ekiti',13=>'Enugu',14=>'Federal Capital Territoty',
								15=>'Gombe',16=>'Imo',17=>'Jigawa',18=>'Kaduna',
								19=>'Kano',20=>'Katsina',21=>'Kebbi',22=>'Kogi',
								23=>'Kwara',24=>'Lagos',25=>'Nasarawa',26=>'Niger',
								27=>'Ogun',28=>'Ondo',29=>'Osun',30=>'Oyo',31=>'Plateau',
								32=>'Rivers',33=>'Sokoto',34=>'Taraba',35=>'Yobe',
								36=>'Zamfara');
protected $state_abb = array('ABI'=>'Abia','ADM'=>'Adamawa','AKI'=>'Akwa Ibom','ANM'=>'Anambra'
								'BAU'=>'Bauchi','BAY'=>'Bayelsa','BEN'=>'Benue','BON'=>'Borno',
								'CRV'=>'Cross River','DET'=>'Delta','EBN'=>'Ebonyi','EDO'=>'Edo',
								'EKT='>'Ekiti','ENU'=>'Enugu','FCT'=>'Federal Capital Territoty',
								'GO'=>'Gombe','IMO'=>'Imo','JIG'=>'Jigawa','KAD'=>'Kaduna',
								'KAN'=>'Kano','KAT'=>'Katsina','KEB'=>'Kebbi','KOG'=>'Kogi',
								'KWR'=>'Kwara','LAG'=>'Lagos','NAS'=>'Nasarawa','NIG'=>'Niger',
								'OG'=>'Ogun','ON'=>'Ondo','OS'=>'Osun','OYO'=>'Oyo','PL'=>'Plateau',
								'RIV'=>'Rivers','SOK'=>'Sokoto','TAR'=>'Taraba','YOB'=>'Yobe',
								'ZAM'=>'Zamfara');
protected $state_code = array('ABI'=>'Abia','ADM'=>'Adamawa','AKI'=>'Akwa Ibom','ANM'=>'Anambra'
								'BAU'=>'Bauchi','BAY'=>'Bayelsa','BEN'=>'Benue','BON'=>'Borno',
								'CRV'=>'Cross River','DET'=>'Delta','EBN'=>'Ebonyi','EDO'=>'Edo',
								'EKT='>'Ekiti','ENU'=>'Enugu','FCT'=>'Federal Capital Territoty',
								'GO'=>'Gombe','IMO'=>'Imo','JIG'=>'Jigawa','KAD'=>'Kaduna',
								'KAN'=>'Kano','KAT'=>'Katsina','KEB'=>'Kebbi','KOG'=>'Kogi',
								'KWR'=>'Kwara','LAG'=>'Lagos','NAS'=>'Nasarawa','NIG'=>'Niger',
								'OG'=>'Ogun','ON'=>'Ondo','OS'=>'Osun','OYO'=>'Oyo','PL'=>'Plateau',
								'RIV'=>'Rivers','SOK'=>'Sokoto','TAR'=>'Taraba','YOB'=>'Yobe',
								'ZAM'=>'Zamfara';
protected $state_capital = array('umuahia'=>'Abia','Yola'=>'Adamawa','uyo'=>'Akwa Ibom','awka'=>'Anambra'
								'bauchi'=>'Bauchi','yenegoa'=>'Bayelsa','markurdi'=>'Benue','maiduguri'=>'Borno',
								'calabar'=>'Cross River','asaba'=>'Delta','abakaliki'=>'Ebonyi','benin city'=>'Edo',
								'ado-ekiti'=>'Ekiti','enugu'=>'Enugu','abuja'=>'Federal Capital Territoty',
								'gombe'=>'Gombe','owerri'=>'Imo','dutse'=>'Jigawa','kaduna'=>'Kaduna',
								'kano'=>'Kano','katsina'=>'Katsina','birnin kebbi'=>'Kebbi','lokoja'=>'Kogi',
								'ilorin'=>'Kwara','ikeja'=>'Lagos','lafia'=>'Nasarawa','minna'=>'Niger',
								'abeokuta'=>'Ogun','akure'=>'Ondo','oshogbo'=>'Osun','ibadan'=>'Oyo','jos'=>'Plateau',
								'port harcourt'=>'Rivers','sokoto'=>'Sokoto','jalingo'=>'Taraba','damaturu'=>'Yobe',
								'gusau'=>'Zamfara';
protected $state_postal_code;

public function __construct() {
	
}

public function get_state_by_capital($capital) {
	return $state_capital[$capital];
}

public function get_state_by_abb($abbrevation){
	return $state_abb[$abbrevation];
}

public function get_state_by_postal_code($postal_code)
	return $state_postal_code[$postal_code];
}
?>
