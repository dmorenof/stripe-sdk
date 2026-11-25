<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionAfterExpirationRecovery
 */
final class PagesCheckoutSessionAfterExpirationRecovery extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'allow_promotion_codes',
        'enabled',
    ];

    protected const array VALIDATION = [
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Enables user redeemable promotion codes on the recovered Checkout Sessions. Defaults to `false`
     */
    public bool $allow_promotion_codes;
    /**
     * If `true`, a recovery url will be generated to recover this Checkout Session if it
     * expires before a transaction is completed. It will be attached to the
     * Checkout Session object upon expiration.
     */
    public bool $enabled;
    /**
     * The timestamp at which the recovery URL will expire.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * URL that creates a new Checkout Session when clicked that is a copy of this expired Checkout Session
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_promotion_codes' => is_bool($value) ? $this->allow_promotion_codes = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
