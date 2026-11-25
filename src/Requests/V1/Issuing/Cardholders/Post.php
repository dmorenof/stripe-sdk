<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Issuing\Cardholders;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing',
        'name',
    ];

    /**
     * The cardholder's billing address.
     */
    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\CardholdersBillingRequest $billing;
    /**
     * Additional information about a `company` cardholder.
     */
    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\CardholdersCompanyRequest $company;
    /**
     * The cardholder's email address.
     */
    public string $email;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Additional information about an `individual` cardholder.
     */
    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\CardholdersIndividualRequest $individual;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\MetadataMapRequest $metadata;
    /**
     * The cardholder's name. This will be printed on cards issued to them. The maximum length of this field is 24 characters. This field cannot contain any special characters or numbers.
     */
    public string $name;
    /**
     * The cardholder's phone number. This will be transformed to [E.164](https://en.wikipedia.org/wiki/E.164) if it is not provided in that format already. This is required for all cardholders who will be creating EU cards. See the [3D Secure documentation](https://docs.stripe.com/issuing/3d-secure#when-is-3d-secure-applied) for more details.
     */
    public string $phone_number;
    /**
     * The cardholder’s preferred locales (languages), ordered by preference. Locales can be `de`, `en`, `es`, `fr`, or `it`.
     *  This changes the language of the [3D Secure flow](https://docs.stripe.com/issuing/3d-secure) and one-time password messages sent to the cardholder.
     */
    public \StripeSDK\Collections\V1\Issuing\Cardholders\Post\PreferredLocalesCollection $preferred_locales;
    /**
     * Rules that control spending across this cardholder's cards. Refer to our [documentation](https://docs.stripe.com/issuing/controls/spending-controls) for more details.
     */
    public \StripeSDK\Requests\V1\Issuing\Cardholders\Post\SpendingControlsRequest $spending_controls;
    /**
     * Specifies whether to permit authorizations on this cardholder's cards. Defaults to `active`.
     */
    public \StripeSDK\Enums\V1\Issuing\Cardholders\Post\CardholdersStatusEnum $status;
    /**
     * One of `individual` or `company`. See [Choose a cardholder type](https://docs.stripe.com/issuing/other/choose-cardholder) for more details.
     */
    public \StripeSDK\Enums\V1\Issuing\Cardholders\Post\CardholdersTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone_number' => is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\V1\Issuing\Cardholders\Post\CardholdersStatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Issuing\Cardholders\Post\CardholdersTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
