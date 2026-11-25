<?php

declare(strict_types=1);

namespace StripeSDK\V1\Accounts\ByAccount;

final class Unreject extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/accounts/{account}/unreject [operationId: PostAccountsAccountUnreject] */
    /**
     * Unreject an account
     *
     * <p>With Connect, you can unreject accounts that you have previously rejected.</p>
     *
     * <p>Only accounts that were rejected by your platform can be unrejected. This API cannot be used to unreject accounts that were rejected by Stripe.</p>
     *
     * <p>Unreject will only enable charges and/or payouts if there are no other restrictions other than those placed by a previous rejection. If you have separately paused charges and/or payouts outside of rejection, those pauses will remain in place after unrejection.</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\Accounts\ByAccount\Unreject\Post $payload = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Accounts\ByAccount\Unreject::class)->post($account, $payload);
    }
}
