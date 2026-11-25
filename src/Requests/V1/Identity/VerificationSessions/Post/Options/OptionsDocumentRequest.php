<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Identity\VerificationSessions\Post\Options;

final class OptionsDocumentRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DocumentVariant1Request::class, \StripeSDK\Enums\DocumentVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'allowed_types' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'driving_license',
                            'id_card',
                            'passport',
                        ],
                    ],
                ],
                'require_id_number' => [
                    'kind' => 'boolean',
                ],
                'require_live_capture' => [
                    'kind' => 'boolean',
                ],
                'require_matching_selfie' => [
                    'kind' => 'boolean',
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
