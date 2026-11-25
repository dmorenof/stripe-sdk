<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * setup_intent_payment_method_options_card_mandate_options
 */
final class IntentPaymentMethodOptionsCardMandateOptions extends \Dmorenof\SdkRuntime\DTO
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

    /**
     * Amount to be charged for future payments, specified in the presentment currency.
     */
    public int $amount;
    /**
     * One of `fixed` or `maximum`. If `fixed`, the `amount` param refers to the exact amount to be charged in future payments. If `maximum`, the amount charged can be up to the value passed for the `amount` param.
     */
    public \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCardMandateOptions\AmountTypeEnum $amount_type;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * A description of the mandate or subscription that is meant to be displayed to the customer.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * End date of the mandate or subscription. If not provided, the mandate will be active until canceled. If provided, end date should be after start date.
     * Format: unix-time
     */
    public ?int $end_date;
    /**
     * Specifies payment frequency. One of `day`, `week`, `month`, `year`, or `sporadic`.
     */
    public \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCardMandateOptions\IntervalEnum $interval;
    /**
     * The number of intervals between payments. For example, `interval=month` and `interval_count=3` indicates one payment every three months. Maximum of one year interval allowed (1 year, 12 months, or 52 weeks). This parameter is optional when `interval=sporadic`.
     */
    public ?int $interval_count;
    /**
     * Unique identifier for the mandate or subscription.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Start date of the mandate or subscription. Start date should not be lesser than yesterday.
     * Format: unix-time
     */
    public int $start_date;
    /**
     * Specifies the type of mandates supported. Possible values are `india`.
     */
    public ?\StripeSDK\Collections\Setup\IntentPaymentMethodOptionsCardMandateOptions\SupportedTypesCollection $supported_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_type' => is_string($value) ? $this->amount_type = \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCardMandateOptions\AmountTypeEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'end_date' => $value === null || is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCardMandateOptions\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => $value === null || is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
