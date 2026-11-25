<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features;

/**
 * customer_update_creation_param
 */
final class CustomerUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public \StripeSDK\Requests\V1\BillingPortal\Configurations\Post\Features\CustomerUpdate\AllowedUpdatesRequest $allowed_updates;
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
