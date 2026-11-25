<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Radar;

/**
 * Payment Evaluation
 *
 * Payment Evaluations represent the risk lifecycle of an externally processed payment. It includes the Radar risk score from Stripe, payment outcome taken by the merchant or processor, and any post transaction events, such as refunds or disputes. See the [Radar API guide](/radar/multiprocessor) for integration steps.
 */
final class PaymentEvaluation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created_at',
        'events',
        'id',
        'livemode',
        'object_',
        'recommended_action',
        'signals',
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
    ];

    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\ClientDeviceMetadata $client_device_metadata_details;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created_at;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\CustomerDetails $customer_details;
    /**
     * Event information associated with the payment evaluation, such as refunds, dispute, early fraud warnings, or user interventions.
     */
    public \StripeSDK\Collections\Radar\PaymentEvaluation\EventsCollection $events;
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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Radar\PaymentEvaluation\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Radar\PaymentEvaluation\ObjectEnum $object_;
    /**
     * Indicates the final outcome for the payment evaluation.
     */
    public ?\StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Outcome $outcome;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\PaymentDetails $payment_details;
    /**
     * Recommended action based on the score of the `fraudulent_payment` signal. Possible values are `block`, `continue` and `request_three_d_secure`.
     */
    public \StripeSDK\Enums\Radar\PaymentEvaluation\RecommendedActionEnum $recommended_action;
    public \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Signals $signals;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_device_metadata_details' => $value instanceof \stdClass ? $this->client_device_metadata_details = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\ClientDeviceMetadata($value) : parent::assignMember($name, $value),
            'created_at' => is_int($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'customer_details' => $value instanceof \stdClass ? $this->customer_details = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\CustomerDetails($value) : parent::assignMember($name, $value),
            'events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->events = new \StripeSDK\Collections\Radar\PaymentEvaluation\EventsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Event::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Radar\PaymentEvaluation\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'outcome' => $value === null || $value instanceof \stdClass ? $this->outcome = $value === null ? null : new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Outcome($value) : parent::assignMember($name, $value),
            'payment_details' => $value instanceof \stdClass ? $this->payment_details = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\PaymentDetails($value) : parent::assignMember($name, $value),
            'recommended_action' => is_string($value) ? $this->recommended_action = \StripeSDK\Enums\Radar\PaymentEvaluation\RecommendedActionEnum::from($value) : parent::assignMember($name, $value),
            'signals' => $value instanceof \stdClass ? $this->signals = new \StripeSDK\DTOs\InsightsResourcesPaymentEvaluation\Signals($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
