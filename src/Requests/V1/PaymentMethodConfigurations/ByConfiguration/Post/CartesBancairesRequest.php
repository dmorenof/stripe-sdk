<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Cartes Bancaires is France's local card network. More than 95% of these cards are co-branded with either Visa or Mastercard, meaning you can process these cards over either Cartes Bancaires or the Visa or Mastercard networks. Check this [page](https://docs.stripe.com/payments/cartes-bancaires) for more details.
 */
final class CartesBancairesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\CartesBancaires\DisplayPreferenceRequest $display_preference;
}
