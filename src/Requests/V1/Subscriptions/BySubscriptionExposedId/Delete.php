<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId;

final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Details about why this subscription was cancelled
     */
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Delete\CancellationDetailsRequest $cancellation_details;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Will generate a final invoice that invoices for any un-invoiced metered usage and new/pending proration invoice items. Defaults to `false`.
     */
    public bool $invoice_now;
    /**
     * Will generate a proration invoice item that credits remaining unused time until the subscription period end. Defaults to `false`.
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
