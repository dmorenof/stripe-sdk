<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * Toggle
 *
 * Information about an input's toggle
 */
final class Toggle extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'title' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The toggle's default value. Can be `enabled` or `disabled`.
     */
    public ?\StripeSDK\Enums\TerminalReaderReaderResource\Toggle\DefaultValueEnum $default_value;
    /**
     * The toggle's description text. Maximum 50 characters.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The toggle's title text. Maximum 50 characters.
     */
    public ?string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }
    /**
     * The toggle's collected value. Can be `enabled` or `disabled`.
     */
    public ?\StripeSDK\Enums\TerminalReaderReaderResource\Toggle\ValueEnum $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_value' => $value === null || is_string($value) ? $this->default_value = $value === null ? null : \StripeSDK\Enums\TerminalReaderReaderResource\Toggle\DefaultValueEnum::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'title' => $value === null || is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'value' => $value === null || is_string($value) ? $this->value = $value === null ? null : \StripeSDK\Enums\TerminalReaderReaderResource\Toggle\ValueEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
