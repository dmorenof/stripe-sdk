<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Identity\VerificationSession;

final class VerificationReportDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\Identity\VerificationReport::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'identity.verification_report',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'address' => [
            'kind' => 'object',
            'properties' => [
                'city' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'country' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'line1' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'line2' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'postal_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'state' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'gelato_data_document_report_date_of_birth' => [
            'kind' => 'object',
            'properties' => [
                'day' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'month' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'year' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'gelato_data_document_report_expiration_date' => [
            'kind' => 'object',
            'properties' => [
                'day' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'month' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'year' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'gelato_data_document_report_issued_date' => [
            'kind' => 'object',
            'properties' => [
                'day' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'month' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'year' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'gelato_data_id_number_report_date' => [
            'kind' => 'object',
            'properties' => [
                'day' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'month' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'year' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'gelato_document_report' => [
            'kind' => 'object',
            'properties' => [
                'address' => [
                    'kind' => 'reference',
                    'ref' => 'address',
                ],
                'dob' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_data_document_report_date_of_birth',
                ],
                'error' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_document_report_error',
                ],
                'expiration_date' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_data_document_report_expiration_date',
                ],
                'files' => [
                    'kind' => 'array',
                    'nullable' => true,
                    'items' => [
                        'kind' => 'string',
                        'rules' => [
                            'maxLength' => 5000,
                        ],
                    ],
                ],
                'first_name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'issued_date' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_data_document_report_issued_date',
                ],
                'issuing_country' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'last_name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'number' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'sex' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        '[redacted]',
                        'female',
                        'male',
                        'unknown',
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'unverified',
                        'verified',
                    ],
                ],
                'type' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'driving_license',
                        'id_card',
                        'passport',
                    ],
                ],
                'unparsed_place_of_birth' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'unparsed_sex' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'status',
            ],
        ],
        'gelato_document_report_error' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'document_expired',
                        'document_type_not_supported',
                        'document_unverified_other',
                    ],
                ],
                'reason' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'gelato_email_report' => [
            'kind' => 'object',
            'properties' => [
                'email' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'error' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_email_report_error',
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'unverified',
                        'verified',
                    ],
                ],
            ],
            'required' => [
                'status',
            ],
        ],
        'gelato_email_report_error' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'email_unverified_other',
                        'email_verification_declined',
                    ],
                ],
                'reason' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'gelato_id_number_report' => [
            'kind' => 'object',
            'properties' => [
                'dob' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_data_id_number_report_date',
                ],
                'error' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_id_number_report_error',
                ],
                'first_name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id_number' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id_number_type' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'br_cpf',
                        'sg_nric',
                        'us_ssn',
                    ],
                ],
                'last_name' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'unverified',
                        'verified',
                    ],
                ],
            ],
            'required' => [
                'status',
            ],
        ],
        'gelato_id_number_report_error' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'id_number_insufficient_document_data',
                        'id_number_mismatch',
                        'id_number_unverified_other',
                    ],
                ],
                'reason' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'gelato_phone_report' => [
            'kind' => 'object',
            'properties' => [
                'error' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_phone_report_error',
                ],
                'phone' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'unverified',
                        'verified',
                    ],
                ],
            ],
            'required' => [
                'status',
            ],
        ],
        'gelato_phone_report_error' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'phone_unverified_other',
                        'phone_verification_declined',
                    ],
                ],
                'reason' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'gelato_report_document_options' => [
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
        'gelato_report_id_number_options' => [
            'kind' => 'object',
        ],
        'gelato_selfie_report' => [
            'kind' => 'object',
            'properties' => [
                'document' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'error' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_selfie_report_error',
                ],
                'selfie' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'status' => [
                    'kind' => 'string',
                    'enum' => [
                        'unverified',
                        'verified',
                    ],
                ],
            ],
            'required' => [
                'status',
            ],
        ],
        'gelato_selfie_report_error' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'selfie_document_missing_photo',
                        'selfie_face_mismatch',
                        'selfie_manipulated',
                        'selfie_unverified_other',
                    ],
                ],
                'reason' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'gelato_verification_report_options' => [
            'kind' => 'object',
            'properties' => [
                'document' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_report_document_options',
                ],
                'id_number' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_report_id_number_options',
                ],
            ],
        ],
        'identity.verification_report' => [
            'kind' => 'object',
            'properties' => [
                'client_reference_id' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'document' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_document_report',
                ],
                'email' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_email_report',
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'id_number' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_id_number_report',
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'object' => [
                    'kind' => 'string',
                    'enum' => [
                        'identity.verification_report',
                    ],
                ],
                'options' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_verification_report_options',
                ],
                'phone' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_phone_report',
                ],
                'selfie' => [
                    'kind' => 'reference',
                    'ref' => 'gelato_selfie_report',
                ],
                'type' => [
                    'kind' => 'string',
                    'enum' => [
                        'document',
                        'id_number',
                        'verification_flow',
                    ],
                ],
                'verification_flow' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'verification_session' => [
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
                'livemode',
                'object',
                'type',
            ],
        ],
    ];
}
