<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\Post\TrackingDetails;

/**
 * us_domestic_wire_tracking_details_params
 */
final class DomesticWireRequest extends \Dmorenof\SdkRuntime\DTO
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

    public string $chips {
        set {
            $this->assigning('chips', $value);
            $this->chips = $value;
        }
    }
    public string $imad {
        set {
            $this->assigning('imad', $value);
            $this->imad = $value;
        }
    }
    public string $omad {
        set {
            $this->assigning('omad', $value);
            $this->omad = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chips' => is_string($value) ? $this->chips = $value : parent::assignMember($name, $value),
            'imad' => is_string($value) ? $this->imad = $value : parent::assignMember($name, $value),
            'omad' => is_string($value) ? $this->omad = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
