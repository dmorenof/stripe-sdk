<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsBillieRequest9Variant1;

final class CompanyDetailsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\CompanyDetailsRequest9Variant1\Request9Variant1Request::class, \StripeSDK\Enums\CompanyDetailsRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'registered_address' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'object',
                            'properties' => [
                                'city' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                                'country' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                                'line1' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                                'line2' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                                'postal_code' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                                'state' => [
                                    'kind' => 'string',
                                    'rules' => [
                                        'maxLength' => 5000,
                                    ],
                                ],
                            ],
                        ],
                        [
                            'kind' => 'string',
                            'enum' => [
                                '',
                            ],
                        ],
                    ],
                ],
                'registered_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'registration_number' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'registration_type' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'ch_ein',
                        'de_hrb',
                        'dk_cvr',
                        'es_cif',
                        'fi_tunnus',
                        'fr_siren',
                        'fr_siret',
                        'it_rea',
                        'nl_kvk',
                        'no_org_number',
                        'no_pno',
                        'se_org_number',
                        'se_pno',
                        'uk_crn',
                    ],
                ],
                'vat' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
