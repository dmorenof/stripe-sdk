<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource\Post;

/**
 * returned_details_params
 *
 * Details about a returned OutboundTransfer.
 */
final class ReturnedDetailsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource\Post\ReturnedDetails\DetailsCodeEnum $code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = \StripeSDK\Enums\V1\TestHelpers\Treasury\OutboundTransfers\ByOutboundTransfer\ReturnResource\Post\ReturnedDetails\DetailsCodeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
