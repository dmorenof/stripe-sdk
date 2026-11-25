<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal;

final class OnboardingLinks extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/onboarding_links [operationId: PostTerminalOnboardingLinks] */
    /**
     * Create an Onboarding Link
     *
     * <p>Creates a new <code>OnboardingLink</code> object that contains a redirect_url used for onboarding onto Tap to Pay on iPhone.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Terminal\OnboardingLinks\Post $payload): \StripeSDK\DTOs\Terminal\OnboardingLink|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\OnboardingLinks::class)->post($payload);
    }
}
