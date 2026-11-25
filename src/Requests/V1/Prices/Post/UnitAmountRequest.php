<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\Post;

/**
 * custom_unit_amount
 *
 * When set, provides configuration for the amount to be adjusted by the customer during Checkout Sessions and Payment Links.
 */
final class UnitAmountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enabled',
    ];

    public bool $enabled;
    public int $maximum;
    public int $minimum;
    public int $preset;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'maximum' => is_int($value) ? $this->maximum = $value : parent::assignMember($name, $value),
            'minimum' => is_int($value) ? $this->minimum = $value : parent::assignMember($name, $value),
            'preset' => is_int($value) ? $this->preset = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
