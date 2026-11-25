<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\Post;

/**
 * receiver_params
 *
 * Optional parameters for the receiver flow. Can be set only if the source is a receiver (`flow` is `receiver`).
 */
final class SourcesReceiverRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'refund_attributes_method' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Enums\V1\Sources\Post\Receiver\AttributesMethodEnum $refund_attributes_method {
        set {
            $this->assigning('refund_attributes_method', $value);
            $this->refund_attributes_method = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'refund_attributes_method' => is_string($value) ? $this->refund_attributes_method = \StripeSDK\Enums\V1\Sources\Post\Receiver\AttributesMethodEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
