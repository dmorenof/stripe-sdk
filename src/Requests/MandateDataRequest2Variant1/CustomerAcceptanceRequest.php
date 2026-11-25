<?php

declare(strict_types=1);

namespace StripeSDK\Requests\MandateDataRequest2Variant1;

/**
 * customer_acceptance_param
 */
final class CustomerAcceptanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: unix-time
     */
    public int $accepted_at;
    public \StripeSDK\Requests\MandateDataRequest2Variant1\CustomerAcceptance\AcceptanceOfflineRequest $offline;
    public \StripeSDK\Requests\MandateDataRequest2Variant1\CustomerAcceptance\AcceptanceOnlineRequest $online;
    public \StripeSDK\Enums\MandateDataRequest2Variant1\CustomerAcceptance\AcceptanceTypeEnum $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accepted_at' => is_int($value) ? $this->accepted_at = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\MandateDataRequest2Variant1\CustomerAcceptance\AcceptanceTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
