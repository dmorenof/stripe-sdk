<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * custom_logo
 */
final class CustomLogo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    protected const array VALIDATION = [
        'content_type' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Content type of the Dashboard-only CustomPaymentMethodType logo.
     */
    public ?string $content_type {
        set {
            $this->assigning('content_type', $value);
            $this->content_type = $value;
        }
    }
    /**
     * URL of the Dashboard-only CustomPaymentMethodType logo.
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
            'content_type' => $value === null || is_string($value) ? $this->content_type = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
