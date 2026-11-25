<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * SetReaderDisplayAction
 *
 * Represents a reader action to set the reader display
 */
final class SetReaderDisplayAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Cart object to be displayed by the reader, including line items, amounts, and currency.
     */
    public ?\StripeSDK\DTOs\TerminalReaderReaderResource\Cart $cart;
    /**
     * Type of information to be displayed by the reader. Only `cart` is currently supported.
     */
    public \StripeSDK\Enums\TerminalReaderReaderResource\SetReaderDisplayAction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cart' => $value === null || $value instanceof \stdClass ? $this->cart = $value === null ? null : new \StripeSDK\DTOs\TerminalReaderReaderResource\Cart($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TerminalReaderReaderResource\SetReaderDisplayAction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
