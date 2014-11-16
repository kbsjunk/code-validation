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

    "abn"      => "The :attribute must be a valid Australian Business Number (ABN).",
    "acn"      => "The :attribute must be a valid Australian Company Number (ACN).",
    "tfn"      => "The :attribute must be a valid Tax File Number (TFN).",
    "isbn"     => "The :attribute must be a valid ISBN.",
    "siren"    => "The :attribute must be a valid SIREN code.",
    "siret"    => "The :attribute must be a valid SIRET code.",
    "bban"     => "The :attribute must be a valid BBAN.",
    "iban"     => "The :attribute must be a valid IBAN.",
    "ean"      => "The :attribute must be a valid EAN-13 code.",
    "insee"    => "The :attribute must be a valid French social security number (NIR).",
    "vat"      => "The :attribute must be a valid European VAT number.",
    "nino"     => "The :attribute must be a valid UK National Insurance number (NINO).",
    "ssn"      => "The :attribute must be a valid US Social Security number.",
    "nif"      => "The :attribute must be a valid NIF.",
    "cif"      => "The :attribute must be a valid CIF.",
    "swift"    => "The :attribute must be a valid SWIFT-BIC.",
    "creditcard" => "The :attribute must be a valid credit card number.",

    "postcode" => "The :attribute must be a valid postcode for :country.",
    "zipcode"  => "The :attribute must be a valid ZIP code for :country.",

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

        'abn'        => 'ABN',                     // Australian Business Number
        'acn'        => 'ACN',                     // Australian Company Number
        'tfn'        => 'TFN',                     // Australian Tax File Number
        'isbn'       => 'ISBN',                    // International Standard Book Number
        'siren'      => 'SIREN code',              // Système informatique du répertoire des entreprises
        'siret'      => 'SIRET code',              // Système informatique du répertoire des établissements
        'bban'       => 'BBAN',                    // Basic Bank Account Number
        'iban'       => 'IBAN',                    // International Bank Account Number
        'ean13'      => 'EAN-13 code',             // International Article Number
        'insee'      => 'NIR',                     // Numéro d'inscription au répertoire des personnes physiques
        'vat'        => 'VAT number',              // Value-Added Tax Identification Number
        'nino'       => 'NINO',                    // United Kingdom National Insurance Number
        'ssn'        => 'Social Security number',  // United States Social Security Number
        'nif'        => 'NIF',                     // Número de identificación fiscal
        'cif'        => 'CIF',                     // Código de identificación fiscal
        'swift'      => 'SWIFT-BIC',               // Society for Worldwide Interbank Financial Telecommunication Business Identification Code
        'postcode'   => 'postcode',                // Postcode
        'zipcode'    => 'ZIP code',                // ZIP Code
        'creditcard' => 'credit card',             // Credit Card

    ),

    'country-default' => 'this country',

);
