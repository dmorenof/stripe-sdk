<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * Input
 *
 * Represents an input to be collected using the reader
 */
final class Input extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * Default text of input being collected.
     */
    public ?\StripeSDK\DTOs\TerminalReaderReaderResource\CustomText $custom_text;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\Email $email;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\Numeric $numeric;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\Phone $phone;
    /**
     * Indicate that this input is required, disabling the skip button.
     */
    public ?bool $required;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\Selection $selection;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\Signature $signature;
    /**
     * Indicate that this input was skipped by the user.
     */
    public bool $skipped;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\Text $text;
    /**
     * List of toggles being collected. Values are present if collection is complete.
     */
    public ?\StripeSDK\Collections\TerminalReaderReaderResource\Input\TogglesCollection $toggles;
    /**
     * Type of input being collected.
     */
    public \StripeSDK\Enums\TerminalReaderReaderResource\Input\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom_text' => $value === null || $value instanceof \stdClass ? $this->custom_text = $value === null ? null : new \StripeSDK\DTOs\TerminalReaderReaderResource\CustomText($value) : parent::assignMember($name, $value),
            'email' => $value instanceof \stdClass ? $this->email = new \StripeSDK\DTOs\TerminalReaderReaderResource\Email($value) : parent::assignMember($name, $value),
            'numeric' => $value instanceof \stdClass ? $this->numeric = new \StripeSDK\DTOs\TerminalReaderReaderResource\Numeric($value) : parent::assignMember($name, $value),
            'phone' => $value instanceof \stdClass ? $this->phone = new \StripeSDK\DTOs\TerminalReaderReaderResource\Phone($value) : parent::assignMember($name, $value),
            'required' => $value === null || is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            'selection' => $value instanceof \stdClass ? $this->selection = new \StripeSDK\DTOs\TerminalReaderReaderResource\Selection($value) : parent::assignMember($name, $value),
            'signature' => $value instanceof \stdClass ? $this->signature = new \StripeSDK\DTOs\TerminalReaderReaderResource\Signature($value) : parent::assignMember($name, $value),
            'skipped' => is_bool($value) ? $this->skipped = $value : parent::assignMember($name, $value),
            'text' => $value instanceof \stdClass ? $this->text = new \StripeSDK\DTOs\TerminalReaderReaderResource\Text($value) : parent::assignMember($name, $value),
            'toggles' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->toggles = $value === null ? null : new \StripeSDK\Collections\TerminalReaderReaderResource\Input\TogglesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TerminalReaderReaderResource\Toggle::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TerminalReaderReaderResource\Input\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
