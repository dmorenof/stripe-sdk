<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing\DisputeNoValidAuthorizationEvidence;

final class AdditionalDocumentationDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\File::class];
    protected const array BRANCH_SCHEMAS = [
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
    ];
}
