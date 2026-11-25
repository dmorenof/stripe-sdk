<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * Source Mandate Notification
 *
 * Source mandate notifications should be created when a notification related to
 * a source mandate must be sent to the payer. They will trigger a webhook or
 * deliver an email to the customer.
 */
final class MandateNotification extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'reason',
        'source',
        'status',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'reason' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Source\MandateNotificationAcssDebitData $acss_debit;
    /**
     * A positive integer in the smallest currency unit (that is, 100 cents for $1.00, or 1 for ¥1, Japanese Yen being a zero-decimal currency) representing the amount associated with the mandate notification. The amount is expressed in the currency of the underlying source. Required if the notification type is `debit_initiated`.
     */
    public ?int $amount;
    public \StripeSDK\DTOs\Source\MandateNotificationBacsDebitData $bacs_debit;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Source\MandateNotification\ObjectEnum $object_;
    /**
     * The reason of the mandate notification. Valid reasons are `mandate_confirmed` or `debit_initiated`.
     */
    public string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }
    public \StripeSDK\DTOs\Source\MandateNotificationSepaDebitData $sepa_debit;
    public \StripeSDK\DTOs\Source $source;
    /**
     * The status of the mandate notification. Valid statuses are `pending` or `submitted`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * The type of source this mandate notification is attached to. Should be the source type identifier code for the payment method, such as `three_d_secure`.
     */
    public string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acss_debit' => $value instanceof \stdClass ? $this->acss_debit = new \StripeSDK\DTOs\Source\MandateNotificationAcssDebitData($value) : parent::assignMember($name, $value),
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'bacs_debit' => $value instanceof \stdClass ? $this->bacs_debit = new \StripeSDK\DTOs\Source\MandateNotificationBacsDebitData($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Source\MandateNotification\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'sepa_debit' => $value instanceof \stdClass ? $this->sepa_debit = new \StripeSDK\DTOs\Source\MandateNotificationSepaDebitData($value) : parent::assignMember($name, $value),
            'source' => $value instanceof \stdClass ? $this->source = new \StripeSDK\DTOs\Source($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
