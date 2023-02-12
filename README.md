## TrinityCore Manager

Web interface for exploring a TrinityCore server installation. This is intended to support `3.3.5a`, and does not 
include any seeders; a fully-built TrinityCore server with associated databases should already exist.

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

Front end assets need to be built, which can be achieved using npm/npx.
```shell
# requires node.js
apt install nodejs
node -v

# if npm isn't already install globally
npm install -g npm
npm -v

# otherwise, proceed here at the root of the project
npm install

# start hot reload service and watch for resource changes
npx mix watch
```
