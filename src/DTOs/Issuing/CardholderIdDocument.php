<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardholderIdDocument
 */
final class CardholderIdDocument extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The back of a document returned by a [file upload](https://docs.stripe.com/api#create_file) with a `purpose` value of `identity_document`.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderIdDocument\BackDTO $back;
    /**
     * The front of a document returned by a [file upload](https://docs.stripe.com/api#create_file) with a `purpose` value of `identity_document`.
     */
    public ?\StripeSDK\DTOs\Issuing\CardholderIdDocument\FrontDTO $front;
}
