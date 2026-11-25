<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * name_collection_params
 *
 * Controls settings applied for collecting the customer's name.
 */
final class NameCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentLinks\Post\NameCollection\CollectionBusinessRequest $business;
    public \StripeSDK\Requests\V1\PaymentLinks\Post\NameCollection\CollectionIndividualRequest $individual;
}
