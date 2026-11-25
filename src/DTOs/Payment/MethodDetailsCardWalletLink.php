<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_details_card_wallet_link
 */
final class MethodDetailsCardWalletLink extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'funding_source_group' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The [funding source group code](https://docs.stripe.com/payments/link/link-payment-methods) applied to this Link payment at confirmation time.
     */
    public ?string $funding_source_group {
        set {
            $this->assigning('funding_source_group', $value);
            $this->funding_source_group = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'funding_source_group' => $value === null || is_string($value) ? $this->funding_source_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
