<?php

declare(strict_types=1);

namespace StripeSDK\Requests\OptionsCardRequest6Variant1;

/**
 * mandate_options_param
 */
final class MandateOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_type',
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
    public \StripeSDK\Enums\OptionsCardRequest6Variant1\MandateOptions\AmountTypeEnum $amount_type;
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
    public \StripeSDK\Enums\OptionsCardRequest6Variant1\MandateOptions\OptionsIntervalEnum $interval;
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
    public \StripeSDK\Collections\OptionsCardRequest6Variant1\MandateOptions\SupportedTypesCollection $supported_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\OptionsCardRequest6Variant1\MandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\OptionsCardRequest6Variant1\MandateOptions\OptionsIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
