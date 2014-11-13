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

	"abn"      => ":attribute muss ein gültiges ABN sein.",
	"isbn"     => ":attribute muss ein gültiges ISBN sein.",
	"siren"    => ":attribute muss ein gültiges SIREN sein.",
	"siret"    => ":attribute muss ein gültiges SIRET sein.",
	"bban"     => ":attribute muss ein gültiges BBAN sein.",
	"iban"     => ":attribute muss ein gültiges IBAN sein.",
	"ean"      => ":attribute muss ein gültiges EAN-13 sein.",
	"insee"    => ":attribute muss eine gültige französiche Versicherungsnummer (NIR) sein.",
	"vat"      => ":attribute muss eine gültige USt-IdNr./UID (VAT Number) sein.",
	"nino"     => ":attribute muss eine gültige britische Nationalversicherungsnummer (NINO) sein.",
	"ssn"      => ":attribute muss eine gültige amerikanische Sozialversicherungsnummer (SSN) sein.",
	"nif"      => ":attribute muss eine gültige NIF sein.",
	"cif"      => ":attribute muss eine gültige CIF sein.",
	"swift"    => ":attribute muss eine gültige SWIFT-BIC sein.",
	"ipv6"     => ":attribute muss eine gültige IPv6-Nummer sein.",
	
	"postcode" => ":attribute muss eine gültige Postleitzahl für :country sein.",
	"zipcode"  => ":attribute muss eine gültige Postleitzahl für :country sein.",


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
		
		'abn'      => 'ABN', // 'Australian Business Number',
		'isbn'     => 'ISBN', // 'International Standard Book Number',
		'siren'    => 'SIREN code', // 'Système informatique du répertoire des entreprises',
		'siret'    => 'SIRET code', // 'Système informatique du répertoire des établissements ',
		'bban'     => 'BBAN', // 'Basic Bank Account Number',
		'iban'     => 'IBAN', // 'International Bank Account Number',
		'ean13'    => 'EAN-13 code', // 'International Article Number',
		'insee'    => 'NIR', // 'Numéro d'inscription au répertoire des personnes physiques',
		'vat'      => 'VAT number', // 'Numéro d'inscription au répertoire des personnes physiques',
		'nino'     => 'NINO', // 'United Kingdom National Insurance Number',
		'ssn'      => 'Social Security number', // 'United States Social Security Number',
		'nif'      => 'NIF', // 'Número de identificación fiscal',
		'cif'      => 'CIF', // 'Código de identificación fiscal',
		'swift'    => 'SWIFT-BIC', // 'Society for Worldwide Interbank Financial Telecommunication Business Identification Code',
		'ipv6'     => 'IPv6', // 'Internet Protocol version 6',
		'postcode' => 'Postleitzahl', // 'Postcode',
		'zipcode'  => 'Postleitzahl', // 'ZIP code',

	),
	
	'countries' => array(
		
		'default' => 'dieses Land',
		
		'UK'      => 'das Vereinigte Königreich',
		'US'      => 'die Vereinigten Staaten',
		'CA'      => 'Kanada',
		'AU'      => 'Australien',
		'NL'      => 'die Niederlande',
		'FR'      => 'Frankreich',
		'DE'      => 'Deutschland',
		'ES'      => 'Spanien',
	),

);
