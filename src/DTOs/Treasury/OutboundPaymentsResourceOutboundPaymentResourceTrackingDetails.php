<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundPaymentsResourceOutboundPaymentResourceTrackingDetails
 */
final class OutboundPaymentsResourceOutboundPaymentResourceTrackingDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceAchTrackingDetails $ach;
    /**
     * The US bank account network used to send funds.
     */
    public \StripeSDK\Enums\Treasury\OutboundPaymentsResourceOutboundPaymentResourceTrackingDetails\TypeEnum $type;
    public \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceUsDomesticWireTrackingDetails $us_domestic_wire;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach' => $value instanceof \stdClass ? $this->ach = new \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceAchTrackingDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\OutboundPaymentsResourceOutboundPaymentResourceTrackingDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            'us_domestic_wire' => $value instanceof \stdClass ? $this->us_domestic_wire = new \StripeSDK\DTOs\Treasury\OutboundPaymentsResourceUsDomesticWireTrackingDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
