<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\PurchaseDetails;

final class DetailsReceiptCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\PurchaseDetails\DetailsReceiptRequest::class;
}
