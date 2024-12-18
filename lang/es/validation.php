<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

return [
    'accepted'        => 'Debe aceptar :attribute.',
    'accepted_if'     => 'Debe aceptar :attribute cuando :other sea :value.',
    'active_url'      => ':attribute no es una URL válida.',
    'after'           => ':attribute debe ser posterior a :date.',
    'after_or_equal'  => ':attribute debe ser igual a :date o posterior.',
    'alpha'           => ':attribute solo puede contener letras.',
    'alpha_dash'      => ':attribute solo puede contener letras, números, guiones (-) y guiones bajos (_).',
    'alpha_num'       => ':attribute solo puede contener letras y números.',
    'array'           => ':attribute debe ser un arreglo.',
    'before'          => ':attribute debe ser anterior a :date.',
    'before_or_equal' => ':attribute debe ser igual a :date o anterior.',
    'between'         => [
        'array'   => ':attribute debe tener entre :min y :max elementos.',
        'file'    => ':attribute debe estar entre :min y :max KB.',
        'numeric' => ':attribute debe estar entre :min y :max.',
        'string'  => ':attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean'          => ':attribute debe ser verdadero o falso.',
    'confirmed'        => 'La confirmación de :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date'             => ':attribute no es una fecha válida.',
    'date_equals'      => ':attribute debe ser igual a :date.',
    'date_format'      => ':attribute debe tener el formato :format.',
    'declined'         => ':attribute debe ser rechazado.',
    'declined_if'      => ':attribute debe ser rechazado cuando :other sea :value.',
    'different'        => ':attribute y :other deben ser diferentes.',
    'digits'           => ':attribute debe tener :digits dígitos.',
    'digits_between'   => ':attribute debe tener entre :min y :max dígitos.',
    'dimensions'       => 'Las dimensiones de la imagen :attribute no son válidas.',
    'distinct'         => ':attribute ya existe.',
    'email'            => ':attribute no es un correo electrónico válido.',
    'ends_with'        => ':attribute debe terminar con uno de los siguientes: :values.',
    'enum'             => 'El valor de :attribute no es válido.',
    'exists'           => ':attribute no existe.',
    'file'             => ':attribute debe ser un archivo.',
    'filled'           => ':attribute no puede estar vacío.',
    'gt'               => [
        'array'   => ':attribute debe tener más de :value elementos.',
        'file'    => ':attribute debe ser mayor que :value KB.',
        'numeric' => ':attribute debe ser mayor que :value.',
        'string'  => ':attribute debe tener más de :value caracteres.',
    ],
    'gte' => [
        'array'   => ':attribute debe tener :value elementos o más.',
        'file'    => ':attribute debe ser mayor o igual que :value KB.',
        'numeric' => ':attribute debe ser mayor o igual que :value.',
        'string'  => ':attribute debe tener :value caracteres o más.',
    ],
    'image'    => ':attribute debe ser una imagen.',
    'in'       => 'El atributo seleccionado :attribute es inválido.',
    'in_array' => ':attribute debe estar en :other.',
    'integer'  => ':attribute debe ser un número entero.',
    'ip'       => ':attribute debe ser una dirección IP válida.',
    'ipv4'     => ':attribute debe ser una dirección IPv4 válida.',
    'ipv6'     => ':attribute debe ser una dirección IPv6 válida.',
    'json'     => ':attribute debe ser una cadena JSON válida.',
    'lt'       => [
        'array'   => ':attribute debe tener menos de :value elementos.',
        'file'    => ':attribute debe ser menor que :value KB.',
        'numeric' => ':attribute debe ser menor que :value.',
        'string'  => ':attribute debe tener menos de :value caracteres.',
    ],
    'lte' => [
        'array'   => ':attribute debe tener :value elementos o menos.',
        'file'    => ':attribute debe ser menor o igual que :value KB.',
        'numeric' => ':attribute debe ser menor o igual que :value.',
        'string'  => ':attribute debe tener :value caracteres o menos.',
    ],
    'mac_address' => ':attribute debe ser una dirección MAC válida.',
    'max'         => [
        'array'   => ':attribute no puede tener más de :max elementos.',
        'file'    => ':attribute no puede ser mayor que :max KB.',
        'numeric' => ':attribute no puede ser mayor que :max.',
        'string'  => ':attribute no puede tener más de :max caracteres.',
    ],
    'mimes'     => ':attribute debe ser un archivo de tipo :values.',
    'mimetypes' => ':attribute debe ser un archivo de tipo :values.',
    'min'       => [
        'array'   => ':attribute debe tener al menos :min elementos.',
        'file'    => ':attribute no puede ser menor de :min KB.',
        'numeric' => ':attribute debe ser al menos :min.',
        'string'  => ':attribute debe tener al menos :min caracteres.',
    ],
    'multiple_of'          => ':attribute debe ser un múltiplo de :value.',
    'not_in'               => 'El atributo seleccionado :attribute es inválido.',
    'not_regex'            => 'El formato de :attribute es inválido.',
    'numeric'              => ':attribute debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => ':attribute debe estar presente.',
    'prohibited'           => 'El campo :attribute está prohibido.',
    'prohibited_if'        => 'El campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless'    => 'El campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits'            => 'El campo :attribute prohíbe la aparición de :other.',
    'regex'                => 'El formato de :attribute es inválido.',
    'required'             => ':attribute es obligatorio.',
    'required_array_keys'  => ':attribute debe contener las claves especificadas: :values.',
    'required_if'          => ':attribute es obligatorio cuando :other es :value.',
    'required_unless'      => ':attribute es obligatorio a menos que :other esté en :values.',
    'required_with'        => ':attribute es obligatorio cuando :values están presentes.',
    'required_with_all'    => ':attribute es obligatorio cuando :values están presentes.',
    'required_without'     => ':attribute es obligatorio cuando :values no están presentes.',
    'required_without_all' => ':attribute es obligatorio cuando ninguno de :values están presentes.',
    'same'                 => ':attribute y :other deben ser iguales.',
    'size'                 => [
        'array'   => ':attribute debe contener :size elementos.',
        'file'    => ':attribute debe ser de :size KB.',
        'numeric' => ':attribute debe ser :size.',
        'string'  => ':attribute debe tener :size caracteres.',
    ],
    'starts_with' => ':attribute debe comenzar con uno de los siguientes: :values.',
    'string'      => ':attribute debe ser una cadena.',
    'timezone'    => ':attribute debe ser una zona horaria válida.',
    'unique'      => ':attribute ya existe.',
    'uploaded'    => ':attribute falló al subir.',
    'url'         => 'El formato de :attribute es inválido.',
    'uuid'        => ':attribute debe ser un UUID válido.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];