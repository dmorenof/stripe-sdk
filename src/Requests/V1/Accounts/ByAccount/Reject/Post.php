<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Reject;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reason',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Whether to pause payouts on the account as part of the rejection. Defaults to `pause`. Use `none` to leave payouts enabled.
     */
    public \StripeSDK\Enums\V1\Accounts\ByAccount\Reject\Post\PayoutsActionEnum $payouts_action;
    /**
     * The reason for rejecting the account. Can be `fraud_payment_method_casher`, `fraud_payment_method_tester`, `fraud_no_intent_to_fulfill`, `fraud_other`, `credit`, `terms_of_service`, or `other`.
     */
    public \StripeSDK\Enums\V1\Accounts\ByAccount\Reject\Post\RejectReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payouts_action' => is_string($value) ? $this->payouts_action = \StripeSDK\Enums\V1\Accounts\ByAccount\Reject\Post\PayoutsActionEnum::from($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\V1\Accounts\ByAccount\Reject\Post\RejectReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
