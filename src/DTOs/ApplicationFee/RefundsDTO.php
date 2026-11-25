<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ApplicationFee;

/**
 * FeeRefundList
 *
 * A list of refunds that have been applied to the fee.
 */
final class RefundsDTO extends \Dmorenof\SdkRuntime\DTO
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
    public \StripeSDK\Collections\ApplicationFee\Refunds\DataCollection $data;
    /**
     * True if this list has another page of items after this one that can be fetched.
     */
    public bool $has_more;
    /**
     * String representing the object's type. Objects of the same type share the same value. Always has the value `list`.
     */
    public \StripeSDK\Enums\ApplicationFee\Refunds\ObjectEnum $object_;
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
            'data' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->data = new \StripeSDK\Collections\ApplicationFee\Refunds\DataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\FeeRefund::class)) : parent::assignMember($name, $value),
            'has_more' => is_bool($value) ? $this->has_more = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ApplicationFee\Refunds\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
