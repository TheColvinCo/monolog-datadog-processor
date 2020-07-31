### Monolog DataDog Processor

Install the package:

`composer req colvin/monolog-datadog-processor`

Define the service in `services.yaml`:

```
services:
    Colvin\Monolog\DatadogProcessor:
      tags:
        - { name: monolog.processor, handler: main }
```