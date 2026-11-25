<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * Choice
 *
 * Choice to be selected on a Reader
 */
final class Choice extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'text',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'text' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The identifier for the selected choice. Maximum 50 characters.
     */
    public ?string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The button style for the choice. Can be `primary` or `secondary`.
     */
    public ?\StripeSDK\Enums\TerminalReaderReaderResource\Choice\StyleEnum $style;
    /**
     * The text to be selected. Maximum 30 characters.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'style' => $value === null || is_string($value) ? $this->style = $value === null ? null : \StripeSDK\Enums\TerminalReaderReaderResource\Choice\StyleEnum::from($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
