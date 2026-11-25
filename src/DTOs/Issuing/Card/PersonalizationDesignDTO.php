<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing\Card;

final class PersonalizationDesignDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Issuing\PersonalizationDesign::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'issuing.personalization_design',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
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
        'issuing.personalization_design' => [
            'kind' => 'object',
            'properties' => [
                'card_logo' => [
                    'kind' => 'anyOf',
                    'nullable' => true,
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
                'carrier_text' => [
                    'kind' => 'reference',
                    'ref' => 'issuing_personalization_design_carrier_text',
                ],
                'created' => [
                    'kind' => 'integer',
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
                'lookup_key' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
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
                        'issuing.personalization_design',
                    ],
                ],
                'physical_bundle' => [
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
                            'ref' => 'issuing.physical_bundle',
                        ],
                    ],
                ],
                'preferences' => [
                    'kind' => 'reference',
                    'ref' => 'issuing_personalization_design_preferences',
                ],
                'rejection_reasons' => [
                    'kind' => 'reference',
                    'ref' => 'issuing_personalization_design_rejection_reasons',
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'active',
                        'inactive',
                        'rejected',
                        'review',
                    ],
                ],
            ],
            'required' => [
                'created',
                'id',
                'livemode',
                'metadata',
                'object',
                'physical_bundle',
                'preferences',
                'rejection_reasons',
                'status',
            ],
        ],
        'issuing.physical_bundle' => [
            'kind' => 'object',
            'properties' => [
                'features' => [
                    'kind' => 'reference',
                    'ref' => 'issuing_physical_bundle_features',
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
                'name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'issuing.physical_bundle',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'active',
                        'inactive',
                        'review',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'custom',
                        'standard',
                    ],
                ],
            ],
            'required' => [
                'features',
                'id',
                'livemode',
                'name',
                'object',
                'status',
                'type',
            ],
        ],
        'issuing_personalization_design_carrier_text' => [
            'kind' => 'object',
            'properties' => [
                'footer_body' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'footer_title' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'header_body' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'header_title' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'issuing_personalization_design_preferences' => [
            'kind' => 'object',
            'properties' => [
                'is_default' => [
                    'kind' => 'boolean',
                ],
                'is_platform_default' => [
                    'kind' => 'boolean',
                    'nullable' => true,
                ],
            ],
            'required' => [
                'is_default',
            ],
        ],
        'issuing_personalization_design_rejection_reasons' => [
            'kind' => 'object',
            'properties' => [
                'card_logo' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'geographic_location',
                            'inappropriate',
                            'network_name',
                            'non_binary_image',
                            'non_fiat_currency',
                            'other',
                            'other_entity',
                            'promotional_material',
                        ],
                    ],
                ],
                'carrier_text' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'geographic_location',
                            'inappropriate',
                            'network_name',
                            'non_fiat_currency',
                            'other',
                            'other_entity',
                            'promotional_material',
                        ],
                    ],
                ],
            ],
        ],
        'issuing_physical_bundle_features' => [
            'kind' => 'object',
            'properties' => [
                'card_logo' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                        'unsupported',
                    ],
                ],
                'carrier_text' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                        'unsupported',
                    ],
                ],
                'second_line' => [
                    'kind' => 'string',
                    'enum' => [
                        'optional',
                        'required',
                        'unsupported',
                    ],
                ],
            ],
            'required' => [
                'card_logo',
                'carrier_text',
                'second_line',
            ],
        ],
    ];
}
