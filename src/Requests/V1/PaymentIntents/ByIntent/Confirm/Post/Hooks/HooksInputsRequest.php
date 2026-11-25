<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\Hooks;

/**
 * async_workflows_inputs_param
 */
final class HooksInputsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\Hooks\Inputs\InputsTaxRequest $tax;
}
