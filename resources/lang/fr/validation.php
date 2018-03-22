<?php

return [

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

    'accepted'             => 'L`attribut: doit être accepté.',
    'active_url'           => 'L`attribut: n`est pas une URL valide.',
    'after'                => 'L`attribut: doit être une date après: date.',
    'after_or_equal'       => 'L`attribut: doit être une date après ou égale à: date.',
    'alpha'                => 'L`attribut: ne peut contenir que des lettres.',
    'alpha_dash'           => 'L`attribut: ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'L`attribut: ne peut contenir que des lettres et des chiffres.',
    'array'                => 'L`attribut: doit être un tableau.',
    'before'               => 'L`attribut: doit être une date avant: date.',
    'before_or_equal'      => 'L`attribut: doit être une date antérieure ou égale à: date.',
    'between'              => [
        'numeric' => 'L`attribut: doit être entre: min et: max.',
        'file'    => 'L`attribut: doit être compris entre: min et: max kilo-octets.',
        'string'  => 'L`attribut: doit être entre: min et: caractères max.',
        'array'   => 'L`attribut: doit avoir entre: min et: max items.',
    ],
    'boolean'              => 'Le champ: attribut doit être vrai ou faux.',
    'confirmed'            => 'La: confirmation d`attribut ne correspond pas.',
    'date'                 => 'L`attribut: n`est pas une date valide.',
    'date_format'          => 'L`attribut: ne correspond pas au format: format.',
    'different'            => 'L`attribut: et: l`autre doit être différent.',
    'digits'               => 'L`attribut: doit être: chiffres chiffres.',
    'digits_between'       => 'L`attribut: doit être entre: min et: chiffres max.',
    'dimensions'           => 'L`attribut: a des dimensions d`image non valides.',
    'distinct'             => 'Le champ: attribut a une valeur en double.',
    'email'                => 'L`attribut: doit être une adresse e-mail valide.',
    'exists'               => 'L`attribut selected: est invalide.',
    'file'                 => 'L`attribut: doit être un fichier.',
    'filled'               => 'Le champ: attribut doit avoir une valeur.',
    'image'                => 'L`attribut: doit être une image.',
    'in'                   => 'L`attribut selected: est invalide.',
    'in_array'             => 'Le champ: attribut n`existe pas dans: autre.',
    'integer'              => 'L`attribut: doit être un entier.',
    'ip'                   => 'L`attribut: doit être une adresse IP valide.',
    'ipv4'                 => 'L`attribut: doit être une adresse IPv4 valide.',
    'ipv6'                 => 'L`attribut: doit être une adresse IPv6 valide.',
    'json'                 => 'L`attribut: doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'L`attribut: ne peut pas être supérieur à: max.',
        'file'    => 'L`attribut: ne peut pas être supérieur à: maximum de kilo-octets.',
        'string'  => 'L`attribut: ne peut pas être supérieur à: caractères max.',
        'array'   => 'L`attribut: ne doit pas avoir plus de: éléments maximum.',
    ],
    'mimes'                => 'L`attribut: doit être un fichier de type:: values.',
    'mimetypes'            => 'L`attribut: doit être un fichier de type:: values.',
    'min'                  => [
        'numeric' => 'L`attribut: doit être au moins: min.',
        'file'    => 'L`attribut: doit être au moins: min kilo-octets.',
        'string'  => 'L`attribut: doit être au moins: min caractères.',
        'array'   => 'L`attribut: doit avoir au moins: min items.',
    ],
    'not_in'               => 'L`attribut selected: est invalide.',
    'not_regex'            => 'Le: format de L`attribut est invalide.',
    'numeric'              => 'L`attribut: doit être un nombre.',
    'present'              => 'Le champ: attribut doit être présent.',
    'regex'                => 'Le: format de L`attribut est invalide.',
    'required'             => 'Le champ: attribut est obligatoire.',
    'required_if'          => 'Le champ: attribut est requis lorsque: other est: value.',
    'required_unless'      => 'Le champ d`attribut: est requis sauf si: other est dans: values.',
    'required_with'        => 'Le champ: attribut est requis lorsque: values est présent.',
    'required_with_all'    => 'Le champ: attribut est requis lorsque: values est présent.',
    'required_without'     => 'Le champ: attribut est requis quand: les valeurs ne sont pas présentes.',
    'required_without_all' => 'Le champ d`attribut: est requis lorsqu`aucune: des valeurs sont présentes.',
    'same'                 => 'L`attribut: et: l`autre doit correspondre.',
    'size'                 => [
        'numeric' => 'L`attribut: doit être: taille.',
        'file'    => 'L`attribut: doit être: taille kilo-octets.',
        'string'  => 'L`attribut: doit être: taille caractères.',
        'array'   => 'L`attribut: doit contenir: éléments de taille.',
    ],
    'string'               => 'L`attribut: doit être une chaîne.',
    'timezone'             => 'L`attribut: doit être une zone valide.',
    'unique'               => 'L`attribut: a déjà été pris.',
    'uploaded'             => 'L`attribut: n`a pas pu être importé.',
    'url'                  => 'Le: format de L`attribut est invalide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message personnalisé',
        ],
    ],

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

    'attributes' => [],

];
