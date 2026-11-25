<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\RefundDestinationDetails;

/**
 * refund_destination_details_paypal
 */
final class Paypal extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'network_decline_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * For refunds declined by the network, a decline code provided by the network which indicates the reason the refund failed.
     */
    public ?string $network_decline_code {
        set {
            $this->assigning('network_decline_code', $value);
            $this->network_decline_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'network_decline_code' => $value === null || is_string($value) ? $this->network_decline_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
