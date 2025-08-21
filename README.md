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
