<?php

declare(strict_types=1);

namespace StripeSDK\Responses\V1\Terminal\Configurations\ByConfiguration\PostStatus200;

final class ByConfigurationPostStatus200Response extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Terminal\Configuration::class, \StripeSDK\DTOs\DeletedTerminal\Configuration::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'terminal.configuration',
        ],
        [
            'kind' => 'reference',
            'ref' => 'deleted_terminal.configuration',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'deleted_terminal.configuration' => [
            'kind' => 'object',
            'properties' => [
                'deleted' => [
                    'kind' => 'boolean',
                    'rules' => [
                        'jsonSchema' => '{"enum":[true]}',
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'terminal.configuration',
                    ],
                ],
            ],
            'required' => [
                'deleted',
                'id',
                'object',
            ],
        ],
        'file' => [
            'kind' => 'object',
            'properties' => [
                'created' => [
                    'kind' => 'integer',
                ],
                'expires_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'filename' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'links' => [
                    'kind' => 'object',
                    'nullable' => true,
                    'properties' => [
                        'data' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'reference',
                                'ref' => 'file_link',
                            ],
                        ],
                        'has_more' => [
                            'kind' => 'boolean',
                        ],
                        'object' => [
                            'kind' => 'string',
                            'enum' => [
                                'list',
                            ],
                        ],
                        'url' => [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                                'pattern' => '^/v1/file_links',
                            ],
                        ],
                    ],
                    'required' => [
                        'data',
                        'has_more',
                        'object',
                        'url',
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'file',
                    ],
                ],
                'purpose' => [
                    'kind' => 'string',
                    'enum' => [
                        'account_requirement',
                        'additional_verification',
                        'business_icon',
                        'business_logo',
                        'customer_signature',
                        'dispute_evidence',
                        'document_provider_identity_document',
                        'finance_report_run',
                        'financial_account_statement',
                        'identity_document',
                        'identity_document_downloadable',
                        'issuing_regulatory_reporting',
                        'pci_document',
                        'platform_terms_of_service',
                        'selfie',
                        'sigma_scheduled_query',
                        'tax_document_user_upload',
                        'terminal_android_apk',
                        'terminal_reader_splashscreen',
                        'terminal_wifi_certificate',
                        'terminal_wifi_private_key',
                    ],
                ],
                'size' => [
                    'kind' => 'integer',
                ],
                'title' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'created',
                'id',
                'object',
                'purpose',
                'size',
            ],
        ],
        'file_link' => [
            'kind' => 'object',
            'properties' => [
                'created' => [
                    'kind' => 'integer',
                ],
                'expired' => [
                    'kind' => 'boolean',
                ],
                'expires_at' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'file' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'file',
                        ],
                    ],
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'metadata' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 500,
                        ],
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'file_link',
                    ],
                ],
                'url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'created',
                'expired',
                'file',
                'id',
                'livemode',
                'metadata',
                'object',
            ],
        ],
        'terminal.configuration' => [
            'kind' => 'object',
            'properties' => [
                'bbpos_wisepad3' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'bbpos_wisepos_e' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'cellular' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_cellular_config',
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'is_account_default' => [
                    'kind' => 'boolean',
                    'nullable' => true,
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'terminal.configuration',
                    ],
                ],
                'offline' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_offline_config',
                ],
                'reboot_window' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_reboot_window',
                ],
                'stripe_s700' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'stripe_s710' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'tipping' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_tipping',
                ],
                'verifone_m425' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'verifone_p400' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'verifone_p630' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'verifone_ux700' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'verifone_v660p' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_device_type_specific_config',
                ],
                'wifi' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_wifi_config',
                ],
            ],
            'required' => [
                'id',
                'livemode',
                'object',
            ],
        ],
        'terminal_configuration_configuration_resource_cellular_config' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                ],
            ],
            'required' => [
                'enabled',
            ],
        ],
        'terminal_configuration_configuration_resource_currency_specific_config' => [
            'kind' => 'object',
            'properties' => [
                'fixed_amounts' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'integer',
                    ],
                ],
                'percentages' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'integer',
                    ],
                ],
                'smart_tip_threshold' => [
                    'kind' => 'integer',
                ],
            ],
        ],
        'terminal_configuration_configuration_resource_device_type_specific_config' => [
            'kind' => 'object',
            'properties' => [
                'splashscreen' => [
                    'kind' => 'anyOf',
                    'branches' => [
                        [
                            'kind' => 'string',
                            'rules' => [
                                'maxLength' => 5000,
                            ],
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => 'file',
                        ],
                    ],
                ],
            ],
        ],
        'terminal_configuration_configuration_resource_enterprise_peap_wifi' => [
            'kind' => 'object',
            'properties' => [
                'ca_certificate_file' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
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
        'terminal_configuration_configuration_resource_enterprise_tls_wifi' => [
            'kind' => 'object',
            'properties' => [
                'ca_certificate_file' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'client_certificate_file' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'private_key_file' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
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
        'terminal_configuration_configuration_resource_offline_config' => [
            'kind' => 'object',
            'properties' => [
                'enabled' => [
                    'kind' => 'boolean',
                    'nullable' => true,
                ],
            ],
        ],
        'terminal_configuration_configuration_resource_personal_psk_wifi' => [
            'kind' => 'object',
            'properties' => [
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
            ],
            'required' => [
                'password',
                'ssid',
            ],
        ],
        'terminal_configuration_configuration_resource_reboot_window' => [
            'kind' => 'object',
            'properties' => [
                'end_hour' => [
                    'kind' => 'integer',
                ],
                'start_hour' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'end_hour',
                'start_hour',
            ],
        ],
        'terminal_configuration_configuration_resource_tipping' => [
            'kind' => 'object',
            'properties' => [
                'aed' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'aud' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'cad' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'chf' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'czk' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'dkk' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'eur' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'gbp' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'gip' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'hkd' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'huf' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'jpy' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'mxn' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'myr' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'nok' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'nzd' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'pln' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'ron' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'sek' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'sgd' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
                'usd' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_currency_specific_config',
                ],
            ],
        ],
        'terminal_configuration_configuration_resource_wifi_config' => [
            'kind' => 'object',
            'properties' => [
                'enterprise_eap_peap' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_enterprise_peap_wifi',
                ],
                'enterprise_eap_tls' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_enterprise_tls_wifi',
                ],
                'personal_psk' => [
                    'kind' => 'reference',
                    'ref' => 'terminal_configuration_configuration_resource_personal_psk_wifi',
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
    ];
}
