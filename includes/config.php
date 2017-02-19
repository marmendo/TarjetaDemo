<?php

error_reporting(E_ALL ^ E_NOTICE);


$info = array(
	'firstName'		=> 'Openshift',
	'middleName'	=> '',
	'lastName'		=> 'Demo',
	'photoURL'		=> 'assets/img/redhat.png',
	'birthDay'		=> strtotime('22-12-1977'),
	'city'			=> 'Madrid',
	'country'		=> 'Spain',
	'street'		=> 'Torre de Cristal',
	'zip'			=> '28016',
	'company'		=> 'Red Hat',
	'website'		=> 'http://www.redhat.com/',
	'email'			=> 'jmn@redhat.com',
	'cellphone'		=> '(+34)616147631',
	'description'	=> "Esta página es una demostración del funcionamiento</br> de OpenShift como plataforma PaaS.",
	'tags'			=> 'The Open Organization'
);


/*

	// Additional properties that can take part of the $info
	// array (will be visible in the generated vcard):

	'educationTitle', 'addon', 'nickname', 'company', 'organisation', 'department', 'jobTitle',
	'telephoneWork1', 'telephoneWork2', 'telephoneHome1', 'telephoneHome2', 'carphone', 'pager',
	'additionalTelephone','faxWork','faxHome','ISDN','preferredTelephone','telex', 'workStreet',
	'workZIP','workCity','workRegion','workCountry','homeStreet','homeZIP', 'homeRegion',
	'postalStreet','postalZIP','postalCity', 'postalRegion', 'postalCountry','role'

*/
?>
