<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * ProcessSetupIntentReaderAction
 *
 * Represents a reader action to process a setup intent
 */
final class ProcessSetupIntentAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'setup_intent',
    ];

    protected const array VALIDATION = [
        'generated_card' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * ID of a card PaymentMethod generated from the card_present PaymentMethod that may be attached to a Customer for future transactions. Only present if it was possible to generate a card PaymentMethod.
     */
    public string $generated_card {
        set {
            $this->assigning('generated_card', $value);
            $this->generated_card = $value;
        }
    }
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessSetupConfig $process_config;
    /**
     * Most recent SetupIntent processed by the reader.
     */
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessSetupIntentAction\SetupIntentDTO $setup_intent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'generated_card' => is_string($value) ? $this->generated_card = $value : parent::assignMember($name, $value),
            'process_config' => $value instanceof \stdClass ? $this->process_config = new \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessSetupConfig($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
