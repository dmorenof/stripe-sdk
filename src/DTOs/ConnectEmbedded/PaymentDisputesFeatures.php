<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ConnectEmbedded;

/**
 * ConnectEmbeddedPaymentDisputesFeatures
 */
final class PaymentDisputesFeatures extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destination_on_behalf_of_charge_management',
        'dispute_management',
        'refund_management',
        'smart_disputes_management',
    ];

    /**
     * Whether connected accounts can manage destination charges that are created on behalf of them. This is `false` by default.
     */
    public bool $destination_on_behalf_of_charge_management;
    /**
     * Whether responding to disputes is enabled, including submitting evidence and accepting disputes. This is `true` by default.
     */
    public bool $dispute_management;
    /**
     * Whether sending refunds is enabled. This is `true` by default.
     */
    public bool $refund_management;
    /**
     * Whether to allow connected accounts to submit disputes using Smart Disputes. Defaults to the value of `dispute_management`.
     */
    public bool $smart_disputes_management;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination_on_behalf_of_charge_management' => is_bool($value) ? $this->destination_on_behalf_of_charge_management = $value : parent::assignMember($name, $value),
            'dispute_management' => is_bool($value) ? $this->dispute_management = $value : parent::assignMember($name, $value),
            'refund_management' => is_bool($value) ? $this->refund_management = $value : parent::assignMember($name, $value),
            'smart_disputes_management' => is_bool($value) ? $this->smart_disputes_management = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
