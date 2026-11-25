<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\InboundTransfers\ById\Fail\Post;

/**
 * failure_details_param
 *
 * Details about a failed InboundTransfer.
 */
final class FailureDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\TestHelpers\Treasury\InboundTransfers\ById\Fail\Post\FailureDetails\DetailsCodeEnum $code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\V1\TestHelpers\Treasury\InboundTransfers\ById\Fail\Post\FailureDetails\DetailsCodeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
