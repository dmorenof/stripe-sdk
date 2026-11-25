<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ServiceAcceptanceRequest2Variant1;

/**
 * custom_text_position_param
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    protected const array VALIDATION = [
        'message' => [
            'maxLength' => 1200,
        ],
    ];

    public string $message {
        set {
            $this->assigning('message', $value);
            $this->message = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
