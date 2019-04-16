# CB Price Rest API (Application)

> **Note:** This Rest API was created based on `git@github.com:isaacperaza/cb-rest-api-framework` to create your own Rest API boilerplate.

## Cb Price Rest API

This is just a very basic Rest API framework created for code challenge purpose. *DO NOT USE* this a base code on your projects


CB = Your company name abbreviation.
 
Note: I normally use it without abbr, but I did this to hide your company identity.


### CB Price Rest API Internal Package Dependencies

![Internal Package Dependencies]

CB project github repositories:

* [cb/cb-price-rest-api (this repo)](https://github.com/isaacperaza/cb-price-rest-api)
* [cb/price-persistence-contracts](https://github.com/isaacperaza/cb-price-persistence-contracts)
* [cb/price-persistence-mysql](https://github.com/isaacperaza/cb-price-persistence-mysql)
* [cb/cb-rest-framework](https://github.com/isaacperaza/cb-cb-rest-framework)


### Code, Practices, Quality and Coding Styles

All code was develop under **SOLID** principles, **PSR-2** (validated via composer scripts phpcbf and phpcs), **PSR-4**, Decoupled composer packages. 


Packages and project names are under **cb** namespace and all php classes are under **CB** as well, for example:

```php
<?php

namespace Cb\Services\Prices;

use Cb\PricePersistenceContracts\Daos\PricesGetAllDaoInterface;
use Cb\PricePersistenceContracts\Models\Price;

/**
 * Service to get all available prices
 * @package Cb\Services\Prices
 */
class PricesGetAllService implements PricesGetAllInterface
{
    /** @var PricesGetAllDaoInterface */
    private $dao;
    
    /**
     * @param PricesGetAllDaoInterface $dao
     */
    public function __construct(PricesGetAllDaoInterface $dao)
    {
        $this->dao = $dao;
    }

    /**
     * @return Price[]
     */
    public function getAll()
    {
        return $this->dao->getAll();
    }
}
```

This is how scripts looks like in a every `composer.json` file:

```json
{
    "scripts": {
        "build": "composer lint:syntax && composer lint:style && composer test:units",
        "lint:beautify": "vendor/bin/phpcbf --standard=PSR2 --extensions=php --severity=1 app/ tests/ -v",
        "lint:style": "vendor/bin/phpcs --standard=PSR2 --extensions=php --severity=1 app/ tests/ -v",
        "lint:syntax": "vendor/bin/parallel-lint app/ tests/",
        "test:coverage": "vendor/bin/phpunit --coverage-text --coverage-html=build/coverage/html",
        "test:units": "vendor/bin/phpunit"
    }
}
```


### Missing code implementations

A lot of things are missing, but as you know create a good and quality code require more effort

* UI
* Service manager (To avoid create a `new class instances` directly around the code)
* Logger
* Unit test (Just some Dto's where tested)
* Integration test
* Add all details on README files for each repository
* Create a repository with rest-framework boilerplate plus documentation how to add a controller, resource, etc.
* Deploy to server.
* Many others

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


[Internal Package Dependencies]:resources/img/intermal_package_dependencies.png?raw=true