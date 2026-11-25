# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by Stripe.

- Stripe and its service names belong to their owners; the MIT license grants no rights to them and does not sublicense the Stripe API or its terms. Stripe publishes an official PHP library, `stripe/stripe-php`, which is what most projects should use; this one is generated from the contract.
- The contract in `contract/stripe-spec3.json` is Stripe's public OpenAPI 3.0 document (API 2026-09-30.endive), downloaded from <https://github.com/stripe/openapi> in November 2026. Its nested form fields (`custom_fields[0][key]`) are sent with the runtime's `nested` format.
- Using the API requires a Stripe API key and compliance with its terms. Never put a live key in source code.
- Provided without warranty.
