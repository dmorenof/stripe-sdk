<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * package_dimensions_specs
 */
final class DimensionsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'height',
        'length',
        'weight',
        'width',
    ];

    public float $height;
    public float $length;
    public float $weight;
    public float $width;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'height' => is_float($value) ? $this->height = $value : parent::assignMember($name, $value),
            'length' => is_float($value) ? $this->length = $value : parent::assignMember($name, $value),
            'weight' => is_float($value) ? $this->weight = $value : parent::assignMember($name, $value),
            'width' => is_float($value) ? $this->width = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
