<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodOptions;

final class OptionsKlarnaRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\KlarnaVariant1Request::class, \StripeSDK\Enums\KlarnaVariant2Enum::class];
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
                'on_demand' => [
                    'kind' => 'object',
                    'properties' => [
                        'average_amount' => [
                            'kind' => 'integer',
                        ],
                        'maximum_amount' => [
                            'kind' => 'integer',
                        ],
                        'minimum_amount' => [
                            'kind' => 'integer',
                        ],
                        'purchase_interval' => [
                            'kind' => 'string',
                            'enum' => [
                                'day',
                                'month',
                                'week',
                                'year',
                            ],
                        ],
                        'purchase_interval_count' => [
                            'kind' => 'integer',
                        ],
                    ],
                ],
                'preferred_locale' => [
                    'kind' => 'string',
                    'enum' => [
                        'cs-CZ',
                        'da-DK',
                        'de-AT',
                        'de-CH',
                        'de-DE',
                        'el-GR',
                        'en-AT',
                        'en-AU',
                        'en-BE',
                        'en-CA',
                        'en-CH',
                        'en-CZ',
                        'en-DE',
                        'en-DK',
                        'en-ES',
                        'en-FI',
                        'en-FR',
                        'en-GB',
                        'en-GR',
                        'en-IE',
                        'en-IT',
                        'en-NL',
                        'en-NO',
                        'en-NZ',
                        'en-PL',
                        'en-PT',
                        'en-RO',
                        'en-SE',
                        'en-US',
                        'es-ES',
                        'es-US',
                        'fi-FI',
                        'fr-BE',
                        'fr-CA',
                        'fr-CH',
                        'fr-FR',
                        'it-CH',
                        'it-IT',
                        'nb-NO',
                        'nl-BE',
                        'nl-NL',
                        'pl-PL',
                        'pt-PT',
                        'ro-RO',
                        'sv-FI',
                        'sv-SE',
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        'none',
                        'off_session',
                        'on_session',
                    ],
                ],
                'subscriptions' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'object',
                                'properties' => [
                                    'interval' => [
                                        'kind' => 'string',
                                        'enum' => [
                                            'day',
                                            'month',
                                            'week',
                                            'year',
                                        ],
                                    ],
                                    'interval_count' => [
                                        'kind' => 'integer',
                                    ],
                                    'name' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 255,
                                        ],
                                    ],
                                    'next_billing' => [
                                        'kind' => 'object',
                                        'properties' => [
                                            'amount' => [
                                                'kind' => 'integer',
                                            ],
                                            'date' => [
                                                'kind' => 'string',
                                                'rules' => [
                                                    'maxLength' => 5000,
                                                ],
                                            ],
                                        ],
                                        'required' => [
                                            'amount',
                                            'date',
                                        ],
                                    ],
                                    'reference' => [
                                        'kind' => 'string',
                                        'rules' => [
                                            'maxLength' => 255,
                                        ],
                                    ],
                                ],
                                'required' => [
                                    'interval',
                                    'reference',
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
