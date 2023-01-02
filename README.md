## TrinityCore Minimanager

Web interface for exploring a TrinityCore server installation. Currently this is intended to support `3.3.5a`

### Installation

Basic setup can be done using PHP's development server, along with a few Laravel-specific initialization steps.

Note: Composer (ideally v2) is required.

```sh
# make a configurable copy of ENV file
cp .env.example .env && \

# install PHP package dependencies
composer install && \

# start up php server
cd public && php -S localhost:8080
```
