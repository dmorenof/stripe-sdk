<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * Invoice Rendering Template
 *
 * Invoice Rendering Templates are used to configure how invoices are rendered on surfaces like the PDF. Invoice Rendering Templates
 * can be created from within the Dashboard, and they can be used over the API when creating invoices.
 */
final class RenderingTemplate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'status',
        'version',
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
        'nickname' => [
            'maxLength' => 5000,
        ],
    ];

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
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Invoice\RenderingTemplate\MetadataMap $metadata;
    /**
     * A brief description of the template, hidden from customers
     */
    public ?string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Invoice\RenderingTemplate\ObjectEnum $object_;
    /**
     * The status of the template, one of `active` or `archived`.
     */
    public \StripeSDK\Enums\Invoice\RenderingTemplate\StatusEnum $status;
    /**
     * Version of this template; version increases by one when an update on the template changes any field that controls invoice rendering
     */
    public int $version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Invoice\RenderingTemplate\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Invoice\RenderingTemplate\StatusEnum::from($value) : parent::assignMember($name, $value),
            'version' => is_int($value) ? $this->version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
