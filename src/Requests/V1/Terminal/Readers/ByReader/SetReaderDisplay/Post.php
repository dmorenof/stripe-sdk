<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Terminal\Readers\ByReader\SetReaderDisplay;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Cart details to display on the reader screen, including line items, amounts, and currency.
     */
    public \StripeSDK\Requests\V1\Terminal\Readers\ByReader\SetReaderDisplay\Post\SetReaderDisplayCartRequest $cart;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Type of information to display. Only `cart` is currently supported.
     */
    public \StripeSDK\Enums\V1\Terminal\Readers\ByReader\SetReaderDisplay\Post\SetReaderDisplayTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Terminal\Readers\ByReader\SetReaderDisplay\Post\SetReaderDisplayTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
