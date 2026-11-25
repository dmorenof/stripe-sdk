<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card;

/**
 * setup_intent_mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_type',
        'currency',
        'interval',
        'reference',
        'start_date',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 200,
        ],
        'reference' => [
            'maxLength' => 80,
        ],
    ];

    public int $amount;
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\MandateOptions\AmountTypeEnum $amount_type;
    /**
     * Format: currency
     */
    public string $currency;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Format: unix-time
     */
    public int $end_date;
    public \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\MandateOptions\OptionsIntervalEnum $interval;
    public int $interval_count;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Format: unix-time
     */
    public int $start_date;
    public \StripeSDK\Collections\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\MandateOptions\SupportedTypesCollection $supported_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\MandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card\MandateOptions\OptionsIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
