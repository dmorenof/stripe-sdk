<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * Selection
 *
 * Information about a selection being collected using a reader
 */
final class Selection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'choices',
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
     * List of possible choices to be selected
     */
    public \StripeSDK\Collections\TerminalReaderReaderResource\Selection\ChoicesCollection $choices;
    /**
     * The id of the selected choice
     */
    public ?string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The text of the selected choice
     */
    public ?string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'choices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->choices = new \StripeSDK\Collections\TerminalReaderReaderResource\Selection\ChoicesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TerminalReaderReaderResource\Choice::class)) : parent::assignMember($name, $value),
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'text' => $value === null || is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
