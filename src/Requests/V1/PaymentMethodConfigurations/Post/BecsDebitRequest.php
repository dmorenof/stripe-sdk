<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Stripe users in Australia can accept Bulk Electronic Clearing System (BECS) direct debit payments from customers with an Australian bank account. Check this [page](https://docs.stripe.com/payments/au-becs-debit) for more details.
 */
final class BecsDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\AuBecsDebit\DisplayPreferenceRequest $display_preference;
}
