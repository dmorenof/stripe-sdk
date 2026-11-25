<?php

declare(strict_types=1);

namespace StripeSDK\V1\Apps;

final class Installs extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/apps/installs [operationId: GetAppsInstalls] */
    /**
     * List all app installs
     *
     * <p>Returns a list of app installs. An app developer or embedding platform filtering by its own app sees the installs across the accounts that installed it; other callers see the installs on their own account. The key selects the environment: a live key lists live installs, a sandbox API key lists the installs on that sandbox, and the key of an app’s managed sandbox filtering by <code>app</code> lists that app’s installs across every sandbox. For existing accounts that still use legacy test mode, a test mode key lists legacy test mode installs.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Apps\Installs $params = null): \StripeSDK\Responses\V1\Apps\Installs\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Installs::class)->get($params);
    }

    /** POST /v1/apps/installs [operationId: PostAppsInstalls] */
    /**
     * Create an app install
     *
     * <p>Creates an app install. An account installs its own private app with its own key; public and testing installs are made from the Dashboard. An app developer or embedding platform acting on a connected account through <code>Stripe-Account</code> installs or reinstalls its app there. For a private app, creating an install installs the newest completed upload; when that version is already installed with nothing pending, the existing install is returned.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Apps\Installs\Post $payload): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Installs::class)->post($payload);
    }

    /** GET /v1/apps/installs/{id} [operationId: GetAppsInstallsId] */
    /**
     * Retrieve an app install
     *
     * <p>Retrieves an app install. The installing account, the app’s developer (with the keys of the account that owns the app or of the app’s managed sandbox), and the embedding platform that created the install can retrieve it.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Apps\Installs\ById $params = null): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Installs::class)->getById($id, $params);
    }

    /** POST /v1/apps/installs/{id} [operationId: PostAppsInstallsId] */
    /**
     * Update an app install
     *
     * <p>Reauthorizes an app install. The installer grants the permissions, content security policy entries, and endpoints that the version being installed requests. An account reauthorizes its own installs on any channel with its own key; app developers and embedding platforms reauthorize installs on connected accounts through <code>Stripe-Account</code>. For private apps, the version being installed is the newest completed upload.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Apps\Installs\ById\Post $payload = null): \StripeSDK\DTOs\Apps\Install|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Installs::class)->postById($id, $payload);
    }
}
