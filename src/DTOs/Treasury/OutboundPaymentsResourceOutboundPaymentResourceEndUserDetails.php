<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundPaymentsResourceOutboundPaymentResourceEndUserDetails
 */
final class OutboundPaymentsResourceOutboundPaymentResourceEndUserDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'present',
    ];

    protected const array VALIDATION = [
        'ip_address' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * IP address of the user initiating the OutboundPayment. Set if `present` is set to `true`. IP address collection is required for risk and compliance reasons. This will be used to help determine if the OutboundPayment is authorized or should be blocked.
     */
    public ?string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * `true` if the OutboundPayment creation request is being made on behalf of an end user by a platform. Otherwise, `false`.
     */
    public bool $present;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'present' => is_bool($value) ? $this->present = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
