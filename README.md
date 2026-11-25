# Stripe SDK for PHP (generated)

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/stripe-sdk.svg)](https://packagist.org/packages/dmorenof/stripe-sdk)

**The whole Stripe API as typed PHP, generated from Stripe's public OpenAPI document.**

612 operations and thousands of typed models, generated from the OpenAPI document Stripe publishes. Nested form fields such as `custom_fields[0][key]` are sent exactly as Stripe expects.

> Unofficial. Not affiliated with, endorsed by or supported by Stripe. See [NOTICE.md](NOTICE.md).

## Why this SDK

- Every resource of the 2026-09-30 API version: payments, customers, billing, Connect, issuing, terminal, tax and more.
- Expandable and nested objects are typed, including unions; errors are a typed model.
- PHPStan-clean at the maximum level across more than 13,000 classes.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/stripe-spec3.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 612 operations and 7,635 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/stripe-sdk
```

## Quick start

```php
<?php
use StripeSDK\Configuration;
use StripeSDK\StripeAPISDK;
use StripeSDK\Requests\V1\PaymentIntents\Post as PaymentIntentRequest;
use StripeSDK\V1\PaymentIntents;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['basicAuth' => ['username' => getenv('STRIPE_SECRET_KEY') ?: '', 'password' => '']]);
StripeAPISDK::configure($configuration);

$intent = PaymentIntents::post(new PaymentIntentRequest((object) [
    'amount' => 2000,
    'currency' => 'eur',
    'automatic_payment_methods' => (object) ['enabled' => true],
]));

echo json_encode($intent), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

612 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `customers` | 47 |
| `test_helpers` | 44 |
| `treasury` | 33 |
| `issuing` | 32 |
| `accounts` | 30 |
| `billing` | 29 |
| `terminal` | 26 |
| `invoices` | 18 |
| `tax` | 17 |
| `charges` | 14 |
| `payment_intents` | 12 |
| `radar` | 12 |

…and 66 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Stripe publishes an official PHP library, `stripe/stripe-php`, which most projects should use; this package is a generated, typed alternative.
- Use a test key (`sk_test_…`) while you integrate.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://docs.stripe.com/api)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
