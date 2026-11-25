<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

final class OptionsBillieRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsBillieRequest7Variant1\Request7Variant1Request::class, \StripeSDK\Enums\OptionsBillieRequest7Variant2\Request7Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'capture_method' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'manual',
                    ],
                ],
                'company_details' => [
                    'kind' => 'anyOf',
                    'branches' => [
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
                    ],
                ],
                'reference' => [
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
