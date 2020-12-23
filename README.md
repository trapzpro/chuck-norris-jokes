# Chuck Norris Jokes

Create random Chuck Norris jokes.

## Installation

Use [composer](https://getcomposer.org/) to install chuck-norris-jokes .

```bash
composer require trapzpro/chuck-norris-jokes 
```

## Usage

```php

use Trapzpro\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
