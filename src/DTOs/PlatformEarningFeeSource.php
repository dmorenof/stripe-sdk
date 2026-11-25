<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * PlatformEarningFeeSource
 */
final class PlatformEarningFeeSource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'charge' => [
            'maxLength' => 5000,
        ],
        'payout' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Charge ID that created this application fee.
     */
    public string $charge {
        set {
            $this->assigning('charge', $value);
            $this->charge = $value;
        }
    }
    /**
     * Payout ID that created this application fee.
     */
    public string $payout {
        set {
            $this->assigning('payout', $value);
            $this->payout = $value;
        }
    }
    /**
     * Type of object that created the application fee.
     */
    public \StripeSDK\Enums\PlatformEarningFeeSource\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge' => is_string($value) ? $this->charge = $value : parent::assignMember($name, $value),
            'payout' => is_string($value) ? $this->payout = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\PlatformEarningFeeSource\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
