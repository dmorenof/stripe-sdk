<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post;

/**
 * collected_information_params
 *
 * Information about the customer collected within the Checkout Session. Can only be set when updating `embedded_page` or `elements` sessions.
 */
final class CollectedInformationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post\CollectedInformation\ShippingDetailsRequest $shipping_details;
}
