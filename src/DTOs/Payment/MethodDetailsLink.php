<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_link
 */
final class MethodDetailsLink extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'country' => [
            'maxLength' => 5000,
        ],
        'funding_source_group' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Two-letter ISO code representing the funding source country beneath the Link payment.
     * You could use this attribute to get a sense of international fees.
     */
    public ?string $country {
        set {
            $this->assigning('country', $value);
            $this->country = $value;
        }
    }
    /**
     * The [funding source group code](https://docs.stripe.com/payments/link/link-payment-methods) applied to this Link payment at confirmation time.
     */
    public string $funding_source_group {
        set {
            $this->assigning('funding_source_group', $value);
            $this->funding_source_group = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => $value === null || is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'funding_source_group' => is_string($value) ? $this->funding_source_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
