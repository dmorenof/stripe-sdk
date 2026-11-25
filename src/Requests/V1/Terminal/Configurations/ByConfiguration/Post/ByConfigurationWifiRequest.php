<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Configurations\ByConfiguration\Post;

final class ByConfigurationWifiRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByConfigurationWifiRequestVariant1\WifiVariant1Request::class, \StripeSDK\Enums\ByConfigurationWifiRequestVariant2\WifiVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'enterprise_eap_peap' => [
                    'kind' => 'object',
                    'properties' => [
                        'ca_certificate_file' => [
                            'kind' => 'string',
                        ],
                        'password' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'ssid' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'username' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'required' => [
                        'password',
                        'ssid',
                        'username',
                    ],
                ],
                'enterprise_eap_tls' => [
                    'kind' => 'object',
                    'properties' => [
                        'ca_certificate_file' => [
                            'kind' => 'string',
                        ],
                        'client_certificate_file' => [
                            'kind' => 'string',
                        ],
                        'private_key_file' => [
                            'kind' => 'string',
                        ],
                        'private_key_file_password' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        'ssid' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'required' => [
                        'client_certificate_file',
                        'private_key_file',
                        'ssid',
                    ],
                ],
                'personal_psk' => [
                    'kind' => 'object',
                    'properties' => [
                        'password' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 63,
                            ],
                        ],
                        'ssid' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                    ],
                    'required' => [
                        'password',
                        'ssid',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'enterprise_eap_peap',
                        'enterprise_eap_tls',
                        'personal_psk',
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
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
