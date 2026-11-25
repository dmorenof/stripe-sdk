<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Cancel;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * If the subscription schedule is `active`, indicates if a final invoice will be generated that contains any un-invoiced metered usage and new/pending proration invoice items. Defaults to `true`.
     */
    public bool $invoice_now;
    /**
     * If the subscription schedule is `active`, indicates if the cancellation should be prorated. Defaults to `true`.
     */
    public bool $prorate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoice_now' => is_bool($value) ? $this->invoice_now = $value : parent::assignMember($name, $value),
            'prorate' => is_bool($value) ? $this->prorate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
