# starwarslib ✨

`_in progress_`

[![Last version](https://img.shields.io/packagist/v/clemours/starwarslib?maxAge=3600)](https://packagist.org/packages/clemours/starwarslib)

## not so far ago in a galaxy not so far away...
This library has the purpose to provide a simple way to get data from the Star Wars Website.
It's Open Source so don't be shy to make it better for everyone ! 

## Installation

```bash
composer req clemours/starwarslib
```
## Local dev

```bash
composer install
```

```bash
php vendor/bin/phpstan analyse src --level=max
```

```bash
php vendor/bin/php-cs-fixer fix src --rules=@PSR12  
``` 

```bash
php vendor/bin/phpunit tests   
``` 
## What can u get ?
- Names from the databank url (https://www.starwars.com/databank)
- More to come soon !

## How it works ?
- I use XPath to get the content from the website

Take a look at my Api.php file to see more about it 🧑🏻‍💻

## Usage
Run this command to render the list of the names get from the url

```bash
php build/index.php   
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.