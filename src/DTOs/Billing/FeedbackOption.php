<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Feedback Option
 *
 * A feedback option is a reason you can present to customers when they cancel a
 * subscription through the customer portal. Configure the set of options a customer
 * can choose from on a [portal configuration](/api/customer_portal/configuration).
 *
 * Related guide: [Customer management](/customer-management)
 */
final class FeedbackOption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'id',
        'livemode',
        'object_',
        'status',
        'status_transitions',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
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
    public \StripeSDK\Enums\Billing\FeedbackOption\ObjectEnum $object_;
    /**
     * The feedback option's status.
     */
    public \StripeSDK\Enums\Billing\FeedbackOption\StatusEnum $status;
    public \StripeSDK\DTOs\FeedbackOptionsStatusTransitions $status_transitions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\FeedbackOption\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Billing\FeedbackOption\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\FeedbackOptionsStatusTransitions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
