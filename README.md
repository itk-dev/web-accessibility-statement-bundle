# Web accessibility statement bundle

Adds a route, `/was`, for redirecting to the web accessibility statement for a
Symfony site.

## Installation

```sh
composer require itk-dev/web-accessibility-statement-bundle
```

If not done automatically, add `ItkDevWebAccessibilityStatementBundle` to your
bundles:

```php
# bundles.php
return [
    …,
    ItkDev\WebAccessibilityStatementBundle\ItkDevWebAccessibilityStatementBundle::class => ['all' => true],
];
```

Include the route:

```yaml
# config/routes.yaml
was_bundle:
    resource: '@ItkDevWebAccessibilityStatementBundle/Resources/config/routing.xml'
```

Define the url to your web accessibility statement in `.env.local`:

```env
WEB_ACCESSIBILITY_STATEMENT_URL=https://example.com/was
```
