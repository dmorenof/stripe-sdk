<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Accounts\ByAccount;

final class Unreject extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/accounts/{account}/unreject',
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
                'type' => '\\StripeSDK\\DTOs\\Account',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'account' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Unreject an account
     *
     * <p>With Connect, you can unreject accounts that you have previously rejected.</p>
     *
     * <p>Only accounts that were rejected by your platform can be unrejected. This API cannot be used to unreject accounts that were rejected by Stripe.</p>
     *
     * <p>Unreject will only enable charges and/or payouts if there are no other restrictions other than those placed by a previous rejection. If you have separately paused charges and/or payouts outside of rejection, those pauses will remain in place after unrejection.</p>
     */
    public function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Unreject\Post $payload = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['account' => $account], body: $payload);
        return $result;
    }
}
