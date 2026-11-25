<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * ApmsSourcesSourceList
 *
 * The customer's payment sources, if any.
 */
final class SourcesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
        'has_more',
        'object_',
        'url',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Details about each object.
     */
    public \StripeSDK\Collections\Customer\Sources\DataCollection $data;
    /**
     * True if this list has another page of items after this one that can be fetched.
     */
    public bool $has_more;
    /**
     * String representing the object's type. Objects of the same type share the same value. Always has the value `list`.
     */
    public \StripeSDK\Enums\Customer\Sources\ObjectEnum $object_;
    /**
     * The URL where this list can be accessed.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'has_more' => is_bool($value) ? $this->has_more = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Customer\Sources\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
