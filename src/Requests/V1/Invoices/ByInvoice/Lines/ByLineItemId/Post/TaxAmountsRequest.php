<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post;

final class TaxAmountsRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\TaxAmountsRequest3Variant1Array\Request3Variant1Collection::class, \StripeSDK\Enums\TaxAmountsRequest3Variant2\Request3Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'object',
                'properties' => [
                    'amount' => [
                        'kind' => 'integer',
                    ],
                    'tax_rate_data' => [
                        'kind' => 'object',
                        'properties' => [
                            'country' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 5000,
                                ],
                            ],
                            'description' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 5000,
                                ],
                            ],
                            'display_name' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 200,
                                ],
                            ],
                            'inclusive' => [
                                'kind' => 'boolean',
                            ],
                            'jurisdiction' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 200,
                                ],
                            ],
                            'jurisdiction_level' => [
                                'kind' => 'string',
                                'enum' => [
                                    'city',
                                    'country',
                                    'county',
                                    'district',
                                    'multiple',
                                    'state',
                                ],
                            ],
                            'percentage' => [
                                'kind' => 'number',
                            ],
                            'state' => [
                                'kind' => 'string',
                                'rules' => [
                                    'maxLength' => 5000,
                                ],
                            ],
                            'tax_type' => [
                                'kind' => 'string',
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
                            'display_name',
                            'inclusive',
                            'percentage',
                        ],
                    ],
                    'taxability_reason' => [
                        'kind' => 'string',
                        'enum' => [
                            'customer_exempt',
                            'not_collecting',
                            'not_subject_to_tax',
                            'not_supported',
                            'portion_product_exempt',
                            'portion_reduced_rated',
                            'portion_standard_rated',
                            'product_exempt',
                            'product_exempt_holiday',
                            'proportionally_rated',
                            'reduced_rated',
                            'reverse_charge',
                            'standard_rated',
                            'taxable_basis_reduced',
                            'zero_rated',
                        ],
                    ],
                    'taxable_amount' => [
                        'kind' => 'integer',
                    ],
                ],
                'required' => [
                    'amount',
                    'tax_rate_data',
                    'taxable_amount',
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
