<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices\Post;

/**
 * tier
 */
final class PricesTiersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'up_to',
    ];

    public int $flat_amount;
    /**
     * Format: decimal
     */
    public string $flat_amount_decimal;
    public int $unit_amount;
    /**
     * Format: decimal
     */
    public string $unit_amount_decimal;
    public \StripeSDK\Requests\V1\Prices\Post\TiersItem\UpToRequest $up_to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'flat_amount' => is_int($value) ? $this->flat_amount = $value : parent::assignMember($name, $value),
            'flat_amount_decimal' => is_string($value) ? $this->flat_amount_decimal = $value : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
