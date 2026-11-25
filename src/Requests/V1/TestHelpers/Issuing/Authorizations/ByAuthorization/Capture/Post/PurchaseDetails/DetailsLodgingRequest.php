<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post\PurchaseDetails;

/**
 * lodging_specs
 */
final class DetailsLodgingRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: unix-time
     */
    public int $check_in_at;
    public int $nights;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'check_in_at' => is_int($value) ? $this->check_in_at = $value : parent::assignMember($name, $value),
            'nights' => is_int($value) ? $this->nights = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
