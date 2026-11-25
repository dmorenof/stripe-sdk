<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundTransfersResourceOutboundTransferResourceTrackingDetails
 */
final class OutboundTransfersResourceOutboundTransferResourceTrackingDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\Treasury\OutboundTransfersResourceAchTrackingDetails $ach;
    /**
     * The US bank account network used to send funds.
     */
    public \StripeSDK\Enums\Treasury\OutboundTransfersResourceOutboundTransferResourceTrackingDetails\TypeEnum $type;
    public \StripeSDK\DTOs\Treasury\OutboundTransfersResourceUsDomesticWireTrackingDetails $us_domestic_wire;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ach' => $value instanceof \stdClass ? $this->ach = new \StripeSDK\DTOs\Treasury\OutboundTransfersResourceAchTrackingDetails($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Treasury\OutboundTransfersResourceOutboundTransferResourceTrackingDetails\TypeEnum::from($value) : parent::assignMember($name, $value),
            'us_domestic_wire' => $value instanceof \stdClass ? $this->us_domestic_wire = new \StripeSDK\DTOs\Treasury\OutboundTransfersResourceUsDomesticWireTrackingDetails($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
