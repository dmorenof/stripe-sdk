<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\LineItemsItem;

/**
 * adjustable_quantity_params
 */
final class AdjustableQuantityRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public int $maximum;
    public int $minimum;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'maximum' => is_int($value) ? $this->maximum = $value : parent::assignMember($name, $value),
            'minimum' => is_int($value) ? $this->minimum = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
