<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\ValueListItems;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'value',
        'value_list',
    ];

    protected const array VALIDATION = [
        'value' => [
            'maxLength' => 800,
        ],
        'value_list' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The value of the item (whose type must match the type of the parent value list).
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }
    /**
     * The identifier of the value list which the created item will be added to.
     */
    public string $value_list {
        set {
            $this->assigning('value_list', $value);
            $this->value_list = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            'value_list' => is_string($value) ? $this->value_list = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
