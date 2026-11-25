<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class Reject extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/accounts/{account}/reject [operationId: PostAccountsAccountReject] */
    /**
     * Reject an account
     *
     * <p>With <a href="/connect">Connect</a>, you can reject accounts that you have flagged as suspicious.</p>
     *
     * <p>Only accounts where your platform is liable for negative account balances, which includes Custom and Express accounts, can be rejected.</p>
     */
    public static function post(string $account, \StripeSDK\Requests\V1\Accounts\ByAccount\Reject\Post $payload): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\Reject::class)->post($account, $payload);
    }
}
