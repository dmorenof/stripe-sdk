<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class CreditNotes extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/credit_notes',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\Responses\\V1\\CreditNotes\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all credit notes
     *
     * <p>Returns a list of credit notes.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\CreditNotes $params = null): \StripeSDK\Responses\V1\CreditNotes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\CreditNotes\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/credit_notes',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Credit\\Note',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'lines' => 'nested',
            'metadata' => 'deepObject',
            'refunds' => 'nested',
            'shipping_cost' => 'nested',
        ],
    ];

    /**
     * Create a credit note
     *
     * <p>Issue a credit note to adjust the amount of a finalized invoice. A credit note will first reduce the invoice’s <code>amount_remaining</code> (and <code>amount_due</code>), but not below zero.
     * This amount is indicated by the credit note’s <code>pre_payment_amount</code>. The excess amount is indicated by <code>post_payment_amount</code>, and it can result in any combination of the following:</p>
     *
     * <ul>
     * <li>Refunds: create a new refund (using <code>refund_amount</code>) or link existing refunds (using <code>refunds</code>).</li>
     * <li>Customer balance credit: credit the customer’s balance (using <code>credit_amount</code>) which will be automatically applied to their next invoice when it’s finalized.</li>
     * <li>Outside of Stripe credit: record the amount that is or will be credited outside of Stripe (using <code>out_of_band_amount</code>).</li>
     * </ul>
     *
     * <p>The sum of refunds, customer balance credits, and outside of Stripe credits must equal the <code>post_payment_amount</code>.</p>
     *
     * <p>You may issue multiple credit notes for an invoice. Each credit note may increment the invoice’s <code>pre_payment_credit_notes_amount</code>,
     * <code>post_payment_credit_notes_amount</code>, or both, depending on the invoice’s <code>amount_remaining</code> at the time of credit note creation.</p>
     *
     * <p>For invoices that also have refunds created through the <a href="/docs/api/refunds">Refund API</a>, the credit note API subtracts those refund amounts from the maximum creditable amount. This prevents the combined credit notes and refunds from exceeding the invoice amount. If you use both, ensure the combined total does not exceed the invoice’s paid amount.</p>
     */
    public function post(\StripeSDK\Requests\V1\CreditNotes\Post $payload): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/credit_notes/{id}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Credit\\Note',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a credit note
     *
     * <p>Retrieves the credit note object with the given identifier.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\CreditNotes\ById $params = null): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/credit_notes/{id}',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Credit\\Note',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Update a credit note
     *
     * <p>Updates an existing credit note.</p>
     */
    public function postById(string $id, ?\StripeSDK\Requests\V1\CreditNotes\ById\Post $payload = null): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
