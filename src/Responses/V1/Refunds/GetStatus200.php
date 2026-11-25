<?php

declare(strict_types=1);

namespace StripeSDK\Responses\V1\Refunds;

/**
 * APIMethodRefundList
 */
final class GetStatus200 extends \Dmorenof\SdkRuntime\DTO
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
            'pattern' => '^/v1/refunds',
        ],
    ];

    public \StripeSDK\Collections\Charge\Refunds\DataCollection $data;
    /**
     * True if this list has another page of items after this one that can be fetched.
     */
    public bool $has_more;
    /**
     * String representing the object's type. Objects of the same type share the same value. Always has the value `list`.
     */
    public \StripeSDK\Enums\V1\Refunds\GetStatus200\GetStatus200ObjectEnum $object_;
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
            'data' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->data = new \StripeSDK\Collections\Charge\Refunds\DataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Refund::class)) : parent::assignMember($name, $value),
            'has_more' => is_bool($value) ? $this->has_more = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\V1\Refunds\GetStatus200\GetStatus200ObjectEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
