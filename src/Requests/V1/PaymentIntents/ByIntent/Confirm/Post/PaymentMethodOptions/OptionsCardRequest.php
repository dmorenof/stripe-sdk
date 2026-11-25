<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentMethodOptions;

final class OptionsCardRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsCardRequest7Variant1\Request7Variant1Request::class, \StripeSDK\Enums\OptionsCardRequest7Variant2\Request7Variant2Enum::class];
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
                'cvc_token' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'installments' => [
                    'kind' => 'object',
                    'properties' => [
                        'enabled' => [
                            'kind' => 'boolean',
                        ],
                        'plan' => [
                            'kind' => 'anyOf',
                            'branches' => [
                                [
                                    'kind' => 'object',
                                    'properties' => [
                                        'count' => [
                                            'kind' => 'integer',
                                        ],
                                        'interval' => [
                                            'kind' => 'string',
                                            'enum' => [
                                                'month',
                                            ],
                                        ],
                                        'type' => [
                                            'kind' => 'string',
                                            'enum' => [
                                                'bonus',
                                                'fixed_count',
                                                'revolving',
                                            ],
                                        ],
                                    ],
                                    'required' => [
                                        'type',
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
                    ],
                ],
                'mandate_options' => [
                    'kind' => 'object',
                    'properties' => [
                        'amount' => [
                            'kind' => 'integer',
                        ],
                        'amount_type' => [
                            'kind' => 'string',
                            'enum' => [
                                'fixed',
                                'maximum',
                            ],
                        ],
                        'description' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 200,
                            ],
                        ],
                        'end_date' => [
                            'kind' => 'integer',
                        ],
                        'interval' => [
                            'kind' => 'string',
                            'enum' => [
                                'day',
                                'month',
                                'sporadic',
                                'week',
                                'year',
                            ],
                        ],
                        'interval_count' => [
                            'kind' => 'integer',
                        ],
                        'reference' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 80,
                            ],
                        ],
                        'start_date' => [
                            'kind' => 'integer',
                        ],
                        'supported_types' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'string',
                                'enum' => [
                                    'india',
                                ],
                            ],
                        ],
                    ],
                    'required' => [
                        'amount',
                        'amount_type',
                        'interval',
                        'reference',
                        'start_date',
                    ],
                ],
                'network' => [
                    'kind' => 'string',
                    'enum' => [
                        'amex',
                        'cartes_bancaires',
                        'diners',
                        'discover',
                        'eftpos_au',
                        'girocard',
                        'interac',
                        'jcb',
                        'link',
                        'mastercard',
                        'unionpay',
                        'unknown',
                        'visa',
                    ],
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'request_extended_authorization' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_incremental_authorization' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_multicapture' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_overcapture' => [
                    'kind' => 'string',
                    'enum' => [
                        'if_available',
                        'never',
                    ],
                ],
                'request_three_d_secure' => [
                    'kind' => 'string',
                    'enum' => [
                        'any',
                        'automatic',
                        'challenge',
                    ],
                ],
                'require_cvc_recollection' => [
                    'kind' => 'boolean',
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'none',
                        'off_session',
                        'on_session',
                    ],
                ],
                'statement_descriptor_suffix_kana' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 22,
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
                'statement_descriptor_suffix_kanji' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 17,
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
                'three_d_secure' => [
                    'kind' => 'object',
                    'properties' => [
                        'ares_trans_status' => [
                            'kind' => 'string',
                            'enum' => [
                                'A',
                                'C',
                                'I',
                                'N',
                                'R',
                                'U',
                                'Y',
                            ],
                        ],
                        'cryptogram' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'electronic_commerce_indicator' => [
                            'kind' => 'string',
                            'enum' => [
                                '01',
                                '02',
                                '05',
                                '06',
                                '07',
                            ],
                        ],
                        'exemption_indicator' => [
                            'kind' => 'string',
                            'enum' => [
                                'low_risk',
                                'none',
                            ],
                        ],
                        'network_options' => [
                            'kind' => 'object',
                            'properties' => [
                                'cartes_bancaires' => [
                                    'kind' => 'object',
                                    'properties' => [
                                        'cb_avalgo' => [
                                            'kind' => 'string',
                                            'enum' => [
                                                '0',
                                                '1',
                                                '2',
                                                '3',
                                                '4',
                                                'A',
                                            ],
                                        ],
                                        'cb_exemption' => [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 4,
                                            ],
                                        ],
                                        'cb_score' => [
                                            'kind' => 'integer',
                                        ],
                                    ],
                                    'required' => [
                                        'cb_avalgo',
                                    ],
                                ],
                            ],
                        ],
                        'requestor_challenge_indicator' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 2,
                            ],
                        ],
                        'transaction_id' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'version' => [
                            'kind' => 'string',
                            'enum' => [
                                '1.0.2',
                                '2.1.0',
                                '2.2.0',
                                '2.3.0',
                                '2.3.1',
                            ],
                        ],
                    ],
                    'required' => [
                        'cryptogram',
                        'transaction_id',
                        'version',
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
