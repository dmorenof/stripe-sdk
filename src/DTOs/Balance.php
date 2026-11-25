<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Balance
 *
 * This is an object representing your Stripe balance. You can retrieve it to see
 * the balance currently on your Stripe account.
 *
 * The top-level `available` and `pending` comprise your "payments balance."
 *
 * Related guide: [Balances and settlement time](https://docs.stripe.com/payments/balances), [Understanding Connect account balances](https://docs.stripe.com/connect/account-balances)
 */
final class Balance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'available',
        'livemode',
        'object_',
        'pending',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    /**
     * Available funds that you can transfer or pay out automatically by Stripe or explicitly through the [Transfers API](https://docs.stripe.com/api#transfers) or [Payouts API](https://docs.stripe.com/api#payouts). You can find the available balance for each currency and payment type in the `source_types` property.
     */
    public \StripeSDK\Collections\Balance\AvailableCollection $available;
    /**
     * Funds held due to negative balances on connected accounts where [account.controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts. You can find the connect reserve balance for each currency and payment type in the `source_types` property.
     */
    public \StripeSDK\Collections\Balance\AvailableCollection $connect_reserved;
    /**
     * Funds that you can pay out using Instant Payouts.
     */
    public \StripeSDK\Collections\Balance\InstantAvailableCollection $instant_available;
    public \StripeSDK\DTOs\Balance\Detail $issuing;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Balance\ObjectEnum $object_;
    /**
     * Funds that aren't available in the balance yet. You can find the pending balance for each currency and each payment type in the `source_types` property.
     */
    public \StripeSDK\Collections\Balance\AvailableCollection $pending;
    public \StripeSDK\DTOs\Balance\DetailUngated $refund_and_dispute_prefunding;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->available = new \StripeSDK\Collections\Balance\AvailableCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Amount::class)) : parent::assignMember($name, $value),
            'connect_reserved' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->connect_reserved = new \StripeSDK\Collections\Balance\AvailableCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Amount::class)) : parent::assignMember($name, $value),
            'instant_available' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->instant_available = new \StripeSDK\Collections\Balance\InstantAvailableCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\AmountNet::class)) : parent::assignMember($name, $value),
            'issuing' => $value instanceof \stdClass ? $this->issuing = new \StripeSDK\DTOs\Balance\Detail($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Balance\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'pending' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->pending = new \StripeSDK\Collections\Balance\AvailableCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Amount::class)) : parent::assignMember($name, $value),
            'refund_and_dispute_prefunding' => $value instanceof \stdClass ? $this->refund_and_dispute_prefunding = new \StripeSDK\DTOs\Balance\DetailUngated($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
