<?php

declare(strict_types=1);

namespace StripeSDK\Requests\NameCollectionRequestVariant1;

/**
 * name_collection_params
 */
final class CollectionVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\NameCollectionRequestVariant1\NameCollectionRequestVariant1BusinessRequest $business;
    public \StripeSDK\Requests\NameCollectionRequestVariant1\NameCollectionRequestVariant1IndividualRequest $individual;
}
