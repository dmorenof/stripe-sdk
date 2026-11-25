<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * name_collection_params
 *
 * Controls name collection settings for the session.
 *
 * You can configure Checkout to collect your customers' business names, individual names, or both. Each name field can be either required or optional.
 *
 * If a [Customer](https://docs.stripe.com/api/customers) is created or provided, the names can be saved to the Customer object as well.
 */
final class NameCollectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\NameCollection\CollectionBusinessRequest $business;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\NameCollection\CollectionIndividualRequest $individual;
}
