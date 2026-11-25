<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * AutomaticTax
 */
final class AutomaticTax extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    protected const array VALIDATION = [
        'provider' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * If Stripe disabled automatic tax, this enum describes why.
     */
    public ?\StripeSDK\Enums\AutomaticTax\DisabledReasonEnum $disabled_reason;
    /**
     * Whether Stripe automatically computes tax on this invoice. Note that incompatible invoice items (invoice items with manually specified [tax rates](https://docs.stripe.com/api/tax_rates), negative amounts, or `tax_behavior=unspecified`) cannot be added to automatic tax invoices.
     */
    public bool $enabled;
    /**
     * The account that's liable for tax. If set, the business address and tax registrations required to perform the tax calculation are loaded from this account. The tax transaction is returned in the report of the connected account.
     */
    public ?\StripeSDK\DTOs\ConnectAccountReference $liability;
    /**
     * The tax provider powering automatic tax.
     */
    public ?string $provider {
        set {
            $this->assigning('provider', $value);
            $this->provider = $value;
        }
    }
    /**
     * The status of the most recent automated tax calculation for this invoice.
     */
    public ?\StripeSDK\Enums\AutomaticTax\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disabled_reason' => $value === null || is_string($value) ? $this->disabled_reason = $value === null ? null : \StripeSDK\Enums\AutomaticTax\DisabledReasonEnum::from($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'liability' => $value === null || $value instanceof \stdClass ? $this->liability = $value === null ? null : new \StripeSDK\DTOs\ConnectAccountReference($value) : parent::assignMember($name, $value),
            'provider' => $value === null || is_string($value) ? $this->provider = $value : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\AutomaticTax\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
