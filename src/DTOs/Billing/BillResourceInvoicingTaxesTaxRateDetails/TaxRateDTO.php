<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTaxRateDetails;

final class TaxRateDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \StripeSDK\DTOs\TaxRate::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'string',
            'rules' => [
                'maxLength' => 5000,
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'tax_rate',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'tax_rate' => [
            'kind' => 'object',
            'properties' => [
                'active' => [
                    'kind' => 'boolean',
                ],
                'country' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'created' => [
                    'kind' => 'integer',
                ],
                'description' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'display_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'effective_percentage' => [
                    'kind' => 'number',
                    'nullable' => true,
                ],
                'flat_amount' => [
                    'kind' => 'reference',
                    'ref' => 'tax_rate_flat_amount',
                ],
                'id' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'inclusive' => [
                    'kind' => 'boolean',
                ],
                'jurisdiction' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'jurisdiction_level' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'city',
                        'country',
                        'county',
                        'district',
                        'multiple',
                        'state',
                    ],
                ],
                'livemode' => [
                    'kind' => 'boolean',
                ],
                'metadata' => [
                    'kind' => 'object',
                    'nullable' => true,
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
                        'tax_rate',
                    ],
                ],
                'percentage' => [
                    'kind' => 'number',
                ],
                'rate_type' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'flat_amount',
                        'percentage',
                    ],
                ],
                'state' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'tax_type' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'amusement_tax',
                        'communications_tax',
                        'digital_excise_tax',
                        'gst',
                        'hst',
                        'igst',
                        'jct',
                        'lease_tax',
                        'mass_transit_parking_tax',
                        'parking_tax',
                        'pst',
                        'qst',
                        'retail_delivery_fee',
                        'rst',
                        'sales_tax',
                        'service_tax',
                        'utility_users_tax',
                        'vat',
                    ],
                ],
            ],
            'required' => [
                'active',
                'created',
                'display_name',
                'id',
                'inclusive',
                'livemode',
                'object',
                'percentage',
            ],
        ],
        'tax_rate_flat_amount' => [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
                ],
                'currency' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'amount',
                'currency',
            ],
        ],
    ];
}
