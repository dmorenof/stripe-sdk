<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing;

final class CreditBalanceSummary extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/billing/credit_balance_summary',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\CreditBalanceSummary',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
            'filter' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve the credit balance summary for a customer
     *
     * <p>Retrieves the credit balance summary for a customer.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Billing\CreditBalanceSummary $params): \StripeSDK\DTOs\Billing\CreditBalanceSummary|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\CreditBalanceSummary|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
