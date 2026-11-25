<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * The [Single Euro Payments Area (SEPA)](https://en.wikipedia.org/wiki/Single_Euro_Payments_Area) is an initiative of the European Union to simplify payments within and across member countries. SEPA established and enforced banking standards to allow for the direct debiting of every EUR-denominated bank account within the SEPA region, check this [page](https://docs.stripe.com/payments/sepa-debit) for more details.
 */
final class SepaDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\SepaDebit\DisplayPreferenceRequest $display_preference;
}
