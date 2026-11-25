<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodDomains;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domain_name',
    ];

    protected const array VALIDATION = [
        'domain_name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The domain name that this payment method domain object represents.
     */
    public string $domain_name {
        set {
            $this->assigning('domain_name', $value);
            $this->domain_name = $value;
        }
    }
    /**
     * Whether this payment method domain is enabled. If the domain is not enabled, payment methods that require a payment method domain will not appear in Elements or Embedded Checkout.
     */
    public bool $enabled;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domain_name' => is_string($value) ? $this->domain_name = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
