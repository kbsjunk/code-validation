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
    "creditcard"  => "Le champ :attribute doit être un numéro de carte de crédit valide.",

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
        'postcode' => 'code postal',
        'zipcode'  => 'code postal',
        'creditcard'  => 'carte de crédit',
    ),

    'country-default' => 'ce pays',

);
