<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"abn"      => "El campo :attribute debe ser un ABN válido.",
	"isbn"     => "El campo :attribute debe ser un ISBN válido.",
	"siren"    => "El campo :attribute debe ser un numéro SIREN válido.",
	"siret"    => "El campo :attribute debe ser un numéro SIRET válido.",
	"bban"     => "El campo :attribute debe ser un BBAN válido.",
	"iban"     => "El campo :attribute debe ser un IBAN válido.",
	"ean"      => "El campo :attribute debe ser un EAN-13 válido.",
	"insee"    => "El campo :attribute debe ser un NIR válido.",
	"vat"      => "El campo :attribute debe ser un numéro de IVA válido.",
	"nino"     => "El campo :attribute debe ser un NINO válido.", //FIXME
	"ssn"      => "El campo :attribute debe ser un SSN válido.", //FIXME
	"nif"      => "El campo :attribute debe ser un NIF válido.",
	"cif"      => "El campo :attribute debe ser un CIF válido.",
	"swift"    => "El campo :attribute debe ser un numéro SWIFT-BIC válido.",
	"ipv6"     => "El campo :attribute debe ser un numéro IPv6 válido.",
	
	"postcode" => "El campo :attribute debe ser un código postal válido para :country.",
	"zipcode"  => "El campo :attribute debe ser un código postal válido para :country.",


	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		'postcode' => 'código postal',
		'zipcode'  => 'código postal',
	),
	
	'country-default' => 'este país',

);
