<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * ReaderAction
 *
 * Represents an action performed by the reader
 */
final class ReaderAction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
        'type',
    ];

    protected const array VALIDATION = [
        'failure_code' => [
            'maxLength' => 5000,
        ],
        'failure_message' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The reader action failed due to an [API error](https://docs.stripe.com/api/errors). Only present when `status` is `failed` and the underlying failure was an API error. Avoid parsing the `message` field for programmatic logic; use `type` or `code` instead. The `message` field is for display to humans only and may be updated at anytime. Requires [reader version](https://docs.stripe.com/terminal/readers/stripe-reader-s700-s710#reader-software-version) 2.42 or later. Readers on older versions always return null.
     */
    public ?\StripeSDK\DTOs\ApiErrors $api_error;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\CollectInputsAction $collect_inputs;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\CollectPaymentMethodAction $collect_payment_method;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ConfirmPaymentIntentAction $confirm_payment_intent;
    /**
     * Failure code, only set if status is `failed`.
     */
    public ?string $failure_code {
        set {
            $this->assigning('failure_code', $value);
            $this->failure_code = $value;
        }
    }
    /**
     * Detailed failure message, only set if status is `failed`.
     */
    public ?string $failure_message {
        set {
            $this->assigning('failure_message', $value);
            $this->failure_message = $value;
        }
    }
    public \StripeSDK\DTOs\TerminalReaderReaderResource\PrintContent $print_content;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessPaymentIntentAction $process_payment_intent;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessSetupIntentAction $process_setup_intent;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentAction $refund_payment;
    public \StripeSDK\DTOs\TerminalReaderReaderResource\SetReaderDisplayAction $set_reader_display;
    /**
     * Status of the action performed by the reader.
     */
    public \StripeSDK\Enums\TerminalReaderReaderResource\ReaderAction\StatusEnum $status;
    /**
     * Type of action performed by the reader.
     */
    public \StripeSDK\Enums\TerminalReaderReaderResource\ReaderAction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'api_error' => $value === null || $value instanceof \stdClass ? $this->api_error = $value === null ? null : new \StripeSDK\DTOs\ApiErrors($value) : parent::assignMember($name, $value),
            'collect_inputs' => $value instanceof \stdClass ? $this->collect_inputs = new \StripeSDK\DTOs\TerminalReaderReaderResource\CollectInputsAction($value) : parent::assignMember($name, $value),
            'collect_payment_method' => $value instanceof \stdClass ? $this->collect_payment_method = new \StripeSDK\DTOs\TerminalReaderReaderResource\CollectPaymentMethodAction($value) : parent::assignMember($name, $value),
            'confirm_payment_intent' => $value instanceof \stdClass ? $this->confirm_payment_intent = new \StripeSDK\DTOs\TerminalReaderReaderResource\ConfirmPaymentIntentAction($value) : parent::assignMember($name, $value),
            'failure_code' => $value === null || is_string($value) ? $this->failure_code = $value : parent::assignMember($name, $value),
            'failure_message' => $value === null || is_string($value) ? $this->failure_message = $value : parent::assignMember($name, $value),
            'print_content' => $value instanceof \stdClass ? $this->print_content = new \StripeSDK\DTOs\TerminalReaderReaderResource\PrintContent($value) : parent::assignMember($name, $value),
            'process_payment_intent' => $value instanceof \stdClass ? $this->process_payment_intent = new \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessPaymentIntentAction($value) : parent::assignMember($name, $value),
            'process_setup_intent' => $value instanceof \stdClass ? $this->process_setup_intent = new \StripeSDK\DTOs\TerminalReaderReaderResource\ProcessSetupIntentAction($value) : parent::assignMember($name, $value),
            'refund_payment' => $value instanceof \stdClass ? $this->refund_payment = new \StripeSDK\DTOs\TerminalReaderReaderResource\RefundPaymentAction($value) : parent::assignMember($name, $value),
            'set_reader_display' => $value instanceof \stdClass ? $this->set_reader_display = new \StripeSDK\DTOs\TerminalReaderReaderResource\SetReaderDisplayAction($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\TerminalReaderReaderResource\ReaderAction\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TerminalReaderReaderResource\ReaderAction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
