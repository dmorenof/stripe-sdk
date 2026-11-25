<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCompletionBehaviorRedirect
 */
final class LinksResourceCompletionBehaviorRedirect extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'url',
    ];

    protected const array VALIDATION = [
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The URL the customer will be redirected to after the purchase is complete.
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
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
