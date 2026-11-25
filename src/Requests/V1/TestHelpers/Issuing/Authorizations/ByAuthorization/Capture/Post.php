<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The amount to capture from the authorization. If not provided, the full amount of the authorization will be captured. This amount is in the authorization currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $capture_amount;
    /**
     * Whether to close the authorization after capture. Defaults to true. Set to false to enable multi-capture flows.
     */
    public bool $close_authorization;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Additional purchase information that is optionally provided by the merchant.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetailsRequest $purchase_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capture_amount' => is_int($value) ? $this->capture_amount = $value : parent::assignMember($name, $value),
            'close_authorization' => is_bool($value) ? $this->close_authorization = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
