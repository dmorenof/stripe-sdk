<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionAutomaticTax
 */
final class PagesCheckoutSessionAutomaticTax extends \Dmorenof\SdkRuntime\DTO
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
     * Indicates whether automatic tax is enabled for the session
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
     * The status of the most recent automated tax calculation for this session.
     */
    public ?\StripeSDK\Enums\Payment\PagesCheckoutSessionAutomaticTax\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'liability' => $value === null || $value instanceof \stdClass ? $this->liability = $value === null ? null : new \StripeSDK\DTOs\ConnectAccountReference($value) : parent::assignMember($name, $value),
            'provider' => $value === null || is_string($value) ? $this->provider = $value : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\Payment\PagesCheckoutSessionAutomaticTax\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
