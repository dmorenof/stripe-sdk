<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post;

/**
 * individual_param
 *
 * Additional information about an `individual` cardholder.
 */
final class ByCardholderIndividualRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual\CardIssuingRequest $card_issuing;
    public \StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual\IndividualDobRequest $dob;
    public string $first_name;
    public string $last_name;
    public \StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post\Individual\IndividualVerificationRequest $verification;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
