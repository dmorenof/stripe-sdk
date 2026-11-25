<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\Hooks\Inputs;

/**
 * async_workflows_inputs_tax_param
 */
final class InputsTaxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'calculation',
    ];

    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\IncrementAuthorization\Post\Hooks\Inputs\Tax\TaxCalculationRequest $calculation;
}
