<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Controls what to bill for when pausing the subscription.
     */
    public \StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post\BillForRequest $bill_for;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Determines how to handle debits and credits when pausing. Defaults to `pending_invoice_item`.
     */
    public \StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\InvoicingBehaviorEnum $invoicing_behavior;
    /**
     * The type of pause to apply. Defaults to `subscription`.
     */
    public \StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\PauseTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoicing_behavior' => is_string($value) ? $this->invoicing_behavior = \StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\InvoicingBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\PauseTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
