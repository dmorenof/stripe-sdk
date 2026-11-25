<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * Signature
 *
 * Information about a signature being collected using a reader
 */
final class Signature extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The File ID of a collected signature image
     */
    public ?string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'value' => $value === null || is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
