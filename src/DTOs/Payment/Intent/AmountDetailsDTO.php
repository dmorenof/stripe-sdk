<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment\Intent;

final class AmountDetailsDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\DTOs\Payment\FlowsAmountDetails::class, \StripeSDK\DTOs\Payment\FlowsAmountDetailsClient::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => 'payment_flows_amount_details',
        ],
        [
            'kind' => 'reference',
            'ref' => 'payment_flows_amount_details_client',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'payment_flows_amount_details' => [
            'kind' => 'object',
            'properties' => [
                'discount_amount' => [
                    'kind' => 'integer',
                ],
                'error' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_resource_error',
                ],
                'line_items' => [
                    'kind' => 'object',
                    'properties' => [
                        'data' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'reference',
                                'ref' => 'payment_intent_amount_details_line_item',
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
                'shipping' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_resource_shipping',
                ],
                'tax' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_resource_tax',
                ],
                'tip' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_client_resource_tip',
                ],
            ],
        ],
        'payment_flows_amount_details_client' => [
            'kind' => 'object',
            'properties' => [
                'tip' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_client_resource_tip',
                ],
            ],
        ],
        'payment_flows_amount_details_client_resource_tip' => [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
                ],
            ],
        ],
        'payment_flows_amount_details_resource_error' => [
            'kind' => 'object',
            'properties' => [
                'code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'enum' => [
                        'amount_details_amount_mismatch',
                        'amount_details_tax_shipping_discount_greater_than_amount',
                    ],
                ],
                'message' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_flows_amount_details_resource_line_items_list_resource_line_item_resource_payment_method_options' => [
            'kind' => 'object',
            'properties' => [
                'card' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_card_payment_intent_amount_details_line_item_payment_method_options',
                ],
                'card_present' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_card_present_amount_details_line_item_payment_method_options',
                ],
                'klarna' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_klarna_payment_intent_amount_details_line_item_payment_method_options',
                ],
                'paypal' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_private_payment_methods_paypal_amount_details_line_item_payment_method_options',
                ],
            ],
        ],
        'payment_flows_amount_details_resource_line_items_list_resource_line_item_resource_tax' => [
            'kind' => 'object',
            'properties' => [
                'total_tax_amount' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'total_tax_amount',
            ],
        ],
        'payment_flows_amount_details_resource_shipping' => [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
                'from_postal_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'to_postal_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_flows_amount_details_resource_tax' => [
            'kind' => 'object',
            'properties' => [
                'total_tax_amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
                ],
            ],
        ],
        'payment_flows_private_payment_methods_card_payment_intent_amount_details_line_item_payment_method_options' => [
            'kind' => 'object',
            'properties' => [
                'commodity_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_flows_private_payment_methods_card_present_amount_details_line_item_payment_method_options' => [
            'kind' => 'object',
            'properties' => [
                'commodity_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_flows_private_payment_methods_klarna_payment_intent_amount_details_line_item_payment_method_options' => [
            'kind' => 'object',
            'properties' => [
                'image_url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 2048,
                    ],
                ],
                'product_url' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 2048,
                    ],
                ],
                'reference' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 255,
                    ],
                ],
                'subscription_reference' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 2048,
                    ],
                ],
            ],
        ],
        'payment_flows_private_payment_methods_paypal_amount_details_line_item_payment_method_options' => [
            'kind' => 'object',
            'properties' => [
                'category' => [
                    'kind' => 'string',
                    'enum' => [
                        'digital_goods',
                        'donation',
                        'physical_goods',
                    ],
                ],
                'description' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'sold_by' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
        ],
        'payment_intent_amount_details_line_item' => [
            'kind' => 'object',
            'properties' => [
                'discount_amount' => [
                    'kind' => 'integer',
                    'nullable' => true,
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
                        'payment_intent_amount_details_line_item',
                    ],
                ],
                'payment_method_options' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_resource_line_items_list_resource_line_item_resource_payment_method_options',
                ],
                'product_code' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'product_name' => [
                    'kind' => 'string',
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
                'quantity' => [
                    'kind' => 'integer',
                ],
                'tax' => [
                    'kind' => 'reference',
                    'ref' => 'payment_flows_amount_details_resource_line_items_list_resource_line_item_resource_tax',
                ],
                'unit_cost' => [
                    'kind' => 'integer',
                ],
                'unit_of_measure' => [
                    'kind' => 'string',
                    'nullable' => true,
                    'rules' => [
                        'maxLength' => 5000,
                    ],
                ],
            ],
            'required' => [
                'id',
                'object',
                'product_name',
                'quantity',
                'unit_cost',
            ],
        ],
    ];
}
