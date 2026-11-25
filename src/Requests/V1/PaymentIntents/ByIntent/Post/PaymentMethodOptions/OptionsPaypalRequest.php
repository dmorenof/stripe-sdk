<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentMethodOptions;

final class OptionsPaypalRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\OptionsPaypalRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\OptionsPaypalRequest2Variant2\Request2Variant2Enum::class];
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
                'preferred_locale' => [
                    'kind' => 'string',
                    'enum' => [
                        'cs-CZ',
                        'da-DK',
                        'de-AT',
                        'de-DE',
                        'de-LU',
                        'el-GR',
                        'en-GB',
                        'en-US',
                        'es-ES',
                        'fi-FI',
                        'fr-BE',
                        'fr-FR',
                        'fr-LU',
                        'hu-HU',
                        'it-IT',
                        'nl-BE',
                        'nl-NL',
                        'pl-PL',
                        'pt-PT',
                        'sk-SK',
                        'sv-SE',
                    ],
                ],
                'reference' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 127,
                    ],
                ],
                'risk_correlation_id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 32,
                    ],
                ],
                'setup_future_usage' => [
                    'kind' => 'string',
                    'enum' => [
                        '',
                        'none',
                        'off_session',
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
