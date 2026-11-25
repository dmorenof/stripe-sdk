<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Settings\Post;

/**
 * head_office_param
 *
 * The place where your business is located.
 */
final class HeadOfficeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    public \StripeSDK\Requests\V1\Tax\Settings\Post\HeadOffice\OfficeAddressRequest $address;
}
