<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * TreasuryOutboundTransfersResourceUSDomesticWireTrackingDetails
 */
final class OutboundTransfersResourceUsDomesticWireTrackingDetails extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'chips' => [
            'maxLength' => 5000,
        ],
        'imad' => [
            'maxLength' => 5000,
        ],
        'omad' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * CHIPS System Sequence Number (SSN) of the OutboundTransfer for transfers sent over the `us_domestic_wire` network.
     */
    public ?string $chips {
        set {
            $this->assigning('chips', $value);
            $this->chips = $value;
        }
    }
    /**
     * IMAD of the OutboundTransfer for transfers sent over the `us_domestic_wire` network.
     */
    public ?string $imad {
        set {
            $this->assigning('imad', $value);
            $this->imad = $value;
        }
    }
    /**
     * OMAD of the OutboundTransfer for transfers sent over the `us_domestic_wire` network.
     */
    public ?string $omad {
        set {
            $this->assigning('omad', $value);
            $this->omad = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chips' => $value === null || is_string($value) ? $this->chips = $value : parent::assignMember($name, $value),
            'imad' => $value === null || is_string($value) ? $this->imad = $value : parent::assignMember($name, $value),
            'omad' => $value === null || is_string($value) ? $this->omad = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
