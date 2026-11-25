<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Payouts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payouts [operationId: GetPayouts] */
    /**
     * List all payouts
     *
     * <p>Returns a list of existing payouts sent to third-party bank accounts or payouts that Stripe sent to you. The payouts return in sorted order, with the most recently created payouts appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Payouts $params = null): \StripeSDK\Responses\V1\Payouts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Payouts::class)->get($params);
    }

    /** POST /v1/payouts [operationId: PostPayouts] */
    /**
     * Create a payout
     *
     * <p>To send funds to your own bank account, create a new payout object. Your <a href="#balance">Stripe balance</a> must cover the payout amount. If it doesn’t, you receive an “Insufficient Funds” error.</p>
     *
     * <p>If your API key is in test mode, money won’t actually be sent, though every other action occurs as if you’re in live mode.</p>
     *
     * <p>If you create a manual payout on a Stripe account that uses multiple payment source types, you need to specify the source type balance that the payout draws from. The <a href="/api/balances/object">balance object</a> details available and pending amounts by source type.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Payouts\Post $payload): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Payouts::class)->post($payload);
    }

    /** GET /v1/payouts/{payout} [operationId: GetPayoutsPayout] */
    /**
     * Retrieve a payout
     *
     * <p>Retrieves the details of an existing payout. Supply the unique payout ID from either a payout creation request or the payout list. Stripe returns the corresponding payout information.</p>
     */
    public static function getByPayout(string $payout, ?\StripeSDK\GetParams\V1\Payouts\ByPayout $params = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Payouts::class)->getByPayout($payout, $params);
    }

    /** POST /v1/payouts/{payout} [operationId: PostPayoutsPayout] */
    /**
     * Update a payout
     *
     * <p>Updates the specified payout by setting the values of the parameters you pass. We don’t change parameters that you don’t provide. This request only accepts the metadata as arguments.</p>
     */
    public static function postByPayout(string $payout, ?\StripeSDK\Requests\V1\Payouts\ByPayout\Post $payload = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Payouts::class)->postByPayout($payout, $payload);
    }
}
