<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post;

final class CustomFieldsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\Request9Variant1Collection::class, \StripeSDK\Enums\CustomFieldsRequest9Variant2\Request9Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'dropdown' => [
                        'kind' => 'object',
                        'properties' => [
                            'default_value' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 100,
                                ],
                            ],
                            'options' => [
                                'kind' => 'array',
                                'items' => [
                                    'kind' => 'object',
                                    'properties' => [
                                        'label' => [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 100,
                                            ],
                                        ],
                                        'value' => [
                                            'kind' => 'string',
                                            'rules' => [
                                                'maxLength' => 100,
                                            ],
                                        ],
                                    ],
                                    'required' => [
                                        'label',
                                        'value',
                                    ],
                                ],
                            ],
                        ],
                        'required' => [
                            'options',
                        ],
                    ],
                    'key' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 200,
                        ],
                    ],
                    'label' => [
                        'kind' => 'object',
                        'properties' => [
                            'custom' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 100,
                                ],
                            ],
                            'type' => [
                                'kind' => 'string',
                                'enum' => [
                                    'custom',
                                ],
                            ],
                        ],
                        'required' => [
                            'custom',
                            'type',
                        ],
                    ],
                    'numeric' => [
                        'kind' => 'object',
                        'properties' => [
                            'default_value' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 255,
                                ],
                            ],
                            'maximum_length' => [
                                'kind' => 'integer',
                            ],
                            'minimum_length' => [
                                'kind' => 'integer',
                            ],
                        ],
                    ],
                    'optional' => [
                        'kind' => 'boolean',
                    ],
                    'text' => [
                        'kind' => 'object',
                        'properties' => [
                            'default_value' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 255,
                                ],
                            ],
                            'maximum_length' => [
                                'kind' => 'integer',
                            ],
                            'minimum_length' => [
                                'kind' => 'integer',
                            ],
                        ],
                    ],
                    'type' => [
                        'kind' => 'string',
                        'enum' => [
                            'dropdown',
                            'numeric',
                            'text',
                        ],
                    ],
                ],
                'required' => [
                    'key',
                    'label',
                    'type',
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
