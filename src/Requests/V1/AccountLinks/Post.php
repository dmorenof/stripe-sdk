<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\AccountLinks;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'type',
    ];

    protected const array VALIDATION = [
        'account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The identifier of the account to create an account link for.
     */
    public string $account {
        set {
            $this->assigning('account', $value);
            $this->account = $value;
        }
    }
    /**
     * The collect parameter is deprecated. Use `collection_options` instead.
     */
    public \StripeSDK\Enums\V1\AccountLinks\Post\AccountLinksCollectEnum $collect;
    /**
     * Specifies the requirements that Stripe collects from connected accounts in the Connect Onboarding flow.
     */
    public \StripeSDK\Requests\V1\AccountLinks\Post\CollectionOptionsRequest $collection_options;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The URL the user will be redirected to if the account link is expired, has been previously-visited, or is otherwise invalid. The URL you specify should attempt to generate a new account link with the same parameters used to create the original account link, then redirect the user to the new account link's URL so they can continue with Connect Onboarding. If a new account link cannot be generated or the redirect fails you should display a useful error to the user.
     */
    public string $refresh_url;
    /**
     * The URL that the user will be redirected to upon leaving or completing the linked flow.
     */
    public string $return_url;
    /**
     * The type of account link the user is requesting.
     *
     * You can create Account Links of type `account_update` only for connected accounts where your platform is responsible for collecting requirements, including Custom accounts. You can't create them for accounts that have access to a Stripe-hosted Dashboard. If you use [Connect embedded components](/connect/get-started-connect-embedded-components), you can include components that allow your connected accounts to update their own information. For an account without Stripe-hosted Dashboard access where Stripe is liable for negative balances, you must use embedded components.
     */
    public \StripeSDK\Enums\V1\AccountLinks\Post\AccountLinksTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account' => is_string($value) ? $this->account = $value : parent::assignMember($name, $value),
            'collect' => is_string($value) ? $this->collect = \StripeSDK\Enums\V1\AccountLinks\Post\AccountLinksCollectEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'refresh_url' => is_string($value) ? $this->refresh_url = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\AccountLinks\Post\AccountLinksTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
