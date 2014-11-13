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

	"abn"      => "Le champ :attribute doit être un ABN valide.",
	"isbn"     => "Le champ :attribute doit être un ISBN valide.",
	"siren"    => "Le champ :attribute doit être un numéro SIREN valide.",
	"siret"    => "Le champ :attribute doit être un numéro SIRET valide.",
	"bban"     => "Le champ :attribute doit être un BBAN valide.",
	"iban"     => "Le champ :attribute doit être un IBAN valide.",
	"ean"      => "Le champ :attribute doit être un EAN-13 valide.",
	"insee"    => "Le champ :attribute doit être un NIR valide.",
	"vat"      => "Le champ :attribute doit être un numéro d'identification à la TVA valide.",
	"nino"     => "Le champ :attribute doit être un NINO valide.", //FIXME
	"ssn"      => "Le champ :attribute doit être un SSN valide.", //FIXME
	"nif"      => "Le champ :attribute doit être un NIF valide.",
	"cif"      => "Le champ :attribute doit être un CIF valide.",
	"swift"    => "Le champ :attribute doit être un numéro SWIFT-BIC valide.",
	"ipv6"     => "Le champ :attribute doit être un numéro IPv6 valide.",
	
	"postcode" => "Le champ :attribute doit être un code postal valide pour :country.",
	"zipcode"  => "Le champ :attribute doit être un code postal valide pour :country.",


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
		'siren'    => 'numéro SIREN', // 'Système informatique du répertoire des entreprises',
		'siret'    => 'numéro SIRET', // 'Système informatique du répertoire des établissements ',
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
		'postcode' => 'Code postal', // 'Internet Protocol version 6',
		'zipcode'  => 'Code postal', // 'Postcode',

	),
	
	'countries' => array(
		
		'default' => 'ce pays',
		
		'UK'      => 'le Royaume-Uni',
		'US'      => 'les États-Unis',
		'CA'      => 'le Canada',
		'AU'      => 'l\'Australie',
		'NL'      => 'les Pays-Bas',
		'FR'      => 'la France',
		'DE'      => 'l\'Allemagne',
		'ES'      => 'l\'Espagne',
	),

);
