# JPKGenerator

This repository contains a PHP library. A Docker environment using PHP 8 is included to ease development and testing of future scripts.

## Requirements

- Docker
- Docker Compose

## Usage

Build the container and start an interactive PHP shell:

```bash
docker compose run --rm app
```

To run a specific PHP script:

```bash
docker compose run --rm app /app/your_script.php
```

The working directory `/app` inside the container is mounted from the project root so changes on the host are immediately available in the container.

## XML Generation

The library contains an `XmlGenerator` class capable of transforming a populated `Document` object into the final JPK XML string. Only fields with non-null values are included in the output and attributes are respected.

```php
<?php
use DevLancer\JPKGenerator\{Document, XmlGenerator};

$document = new Document();
// populate $document with data …

$xml = (new XmlGenerator())->generate($document);
file_put_contents('jpk.xml', $xml);
```

The generator applies the correct namespace prefixes and recursively serializes nested `ParameterBag` structures.
When a `ParameterBag` specifies a custom prefix, it takes precedence over the generator's default mapping.
