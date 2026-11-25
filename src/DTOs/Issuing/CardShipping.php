<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardShipping
 */
final class CardShipping extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
        'name',
        'service',
        'type',
    ];

    protected const array VALIDATION = [
        'business_name' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone_number' => [
            'maxLength' => 5000,
        ],
        'tracking_number' => [
            'maxLength' => 5000,
        ],
        'tracking_url' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Address $address;
    /**
     * Address validation details for the shipment.
     */
    public ?\StripeSDK\DTOs\Issuing\CardShippingAddressValidation $address_validation;
    /**
     * The name of the business at the shipping address, used on the shipping label to ensure delivery when the card is shipped to a cardholder's workplace.
     */
    public ?string $business_name {
        set {
            $this->assigning('business_name', $value);
            $this->business_name = $value;
        }
    }
    /**
     * The delivery company that shipped a card.
     */
    public ?\StripeSDK\Enums\Issuing\CardShipping\CarrierEnum $carrier;
    /**
     * Additional information that may be required for clearing customs.
     */
    public ?\StripeSDK\DTOs\Issuing\CardShippingCustoms $customs;
    /**
     * A unix timestamp representing a best estimate of when the card will be delivered.
     * Format: unix-time
     */
    public ?int $eta;
    /**
     * Recipient name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The phone number of the receiver of the shipment. Our courier partners will use this number to contact you in the event of card delivery issues. For individual shipments to the EU/UK, if this field is empty, we will provide them with the phone number provided when the cardholder was initially created.
     */
    public ?string $phone_number {
        set {
            $this->assigning('phone_number', $value);
            $this->phone_number = $value;
        }
    }
    /**
     * Whether a signature is required for card delivery. This feature is only supported for US users. Standard shipping service does not support signature on delivery. The default value for standard shipping service is false and for express and priority services is true.
     */
    public ?bool $require_signature;
    /**
     * Shipment service, such as `standard` or `express`.
     */
    public \StripeSDK\Enums\Issuing\CardShipping\ServiceEnum $service;
    /**
     * The delivery status of the card.
     */
    public ?\StripeSDK\Enums\Issuing\CardShipping\StatusEnum $status;
    /**
     * A tracking number for a card shipment.
     */
    public ?string $tracking_number {
        set {
            $this->assigning('tracking_number', $value);
            $this->tracking_number = $value;
        }
    }
    /**
     * A link to the shipping carrier's site where you can view detailed information about a card shipment.
     */
    public ?string $tracking_url {
        set {
            $this->assigning('tracking_url', $value);
            $this->tracking_url = $value;
        }
    }
    /**
     * Packaging options.
     */
    public \StripeSDK\Enums\Issuing\CardShipping\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'address_validation' => $value === null || $value instanceof \stdClass ? $this->address_validation = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardShippingAddressValidation($value) : parent::assignMember($name, $value),
            'business_name' => $value === null || is_string($value) ? $this->business_name = $value : parent::assignMember($name, $value),
            'carrier' => $value === null || is_string($value) ? $this->carrier = $value === null ? null : \StripeSDK\Enums\Issuing\CardShipping\CarrierEnum::from($value) : parent::assignMember($name, $value),
            'customs' => $value === null || $value instanceof \stdClass ? $this->customs = $value === null ? null : new \StripeSDK\DTOs\Issuing\CardShippingCustoms($value) : parent::assignMember($name, $value),
            'eta' => $value === null || is_int($value) ? $this->eta = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'require_signature' => $value === null || is_bool($value) ? $this->require_signature = $value : parent::assignMember($name, $value),
            'service' => is_string($value) ? $this->service = \StripeSDK\Enums\Issuing\CardShipping\ServiceEnum::from($value) : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\Issuing\CardShipping\StatusEnum::from($value) : parent::assignMember($name, $value),
            'tracking_number' => $value === null || is_string($value) ? $this->tracking_number = $value : parent::assignMember($name, $value),
            'tracking_url' => $value === null || is_string($value) ? $this->tracking_url = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\CardShipping\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
