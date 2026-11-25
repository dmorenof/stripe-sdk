<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * subscription_payment_method_options_param
 */
final class BillieVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\OptionsBillieRequestVariant1\CompanyDetailsRequest $company_details;
}
