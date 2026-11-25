<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * PrintContent
 *
 * Represents a reader action to print content
 */
final class PrintContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\TerminalReaderReaderResource\FileMetadata $image;
    /**
     * The type of content to print. Currently supports `image`.
     */
    public \StripeSDK\Enums\TerminalReaderReaderResource\PrintContent\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'image' => $value instanceof \stdClass ? $this->image = new \StripeSDK\DTOs\TerminalReaderReaderResource\FileMetadata($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TerminalReaderReaderResource\PrintContent\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
