<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ForwardedRequest;

/**
 * ForwardedRequestHeader
 *
 * Header data.
 */
final class Header extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'value',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 5000,
        ],
        'value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The header name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The header value.
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
