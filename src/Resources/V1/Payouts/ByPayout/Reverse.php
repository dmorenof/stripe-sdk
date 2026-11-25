<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Payouts\ByPayout;

final class Reverse extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payouts/{payout}/reverse',
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
                'type' => '\\StripeSDK\\DTOs\\Payout',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payout' => [
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
     * Reverse a payout
     *
     * <p>Reverses a payout by debiting the destination bank account. At this time, you can only reverse payouts for connected accounts to US and Canadian bank accounts. If the payout is manual and in the <code>pending</code> status, use <code>/v1/payouts/:id/cancel</code> instead.</p>
     *
     * <p>By requesting a reversal through <code>/v1/payouts/:id/reverse</code>, you confirm that the authorized signatory of the selected bank account authorizes the debit on the bank account and that no other authorization is required.</p>
     */
    public function post(string $payout, ?\StripeSDK\Requests\V1\Payouts\ByPayout\Reverse\Post $payload = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payout' => $payout], body: $payload);
        return $result;
    }
}
