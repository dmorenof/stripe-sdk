<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CustomerDetails;

/**
 * tax_param
 */
final class DetailsTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CustomerDetails\Tax\IpAddressRequest $ip_address;
}
