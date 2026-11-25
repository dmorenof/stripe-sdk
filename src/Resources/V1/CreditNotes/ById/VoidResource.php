<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\CreditNotes\ById;

final class VoidResource extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/credit_notes/{id}/void',
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
        ],
    ];

    /**
     * Void a credit note
     *
     * <p>Marks a credit note as void. Learn more about <a href="/docs/billing/invoices/credit-notes#voiding">voiding credit notes</a>.</p>
     */
    public function post(string $id, ?\StripeSDK\Requests\V1\CreditNotes\ById\VoidResource\Post $payload = null): \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Credit\Note|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['id' => $id], body: $payload);
        return $result;
    }
}
