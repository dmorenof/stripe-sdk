<?php

declare(strict_types=1);

namespace StripeSDK\Responses\V1\Charges\Search;

/**
 * SearchResult
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
        'next_page' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\Charges\GetStatus200\GetStatus200DataCollection $data;
    public bool $has_more;
    public ?string $next_page {
        set {
            $this->assigning('next_page', $value);
            $this->next_page = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\V1\Charges\Search\GetStatus200\GetStatus200ObjectEnum $object_;
    /**
     * The total number of objects that match the query, only accurate up to 10,000.
     */
    public int $total_count;
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->data = new \StripeSDK\Collections\V1\Charges\GetStatus200\GetStatus200DataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Charge::class)) : parent::assignMember($name, $value),
            'has_more' => is_bool($value) ? $this->has_more = $value : parent::assignMember($name, $value),
            'next_page' => $value === null || is_string($value) ? $this->next_page = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\V1\Charges\Search\GetStatus200\GetStatus200ObjectEnum::from($value) : parent::assignMember($name, $value),
            'total_count' => is_int($value) ? $this->total_count = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
