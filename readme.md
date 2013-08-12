# CLI Minify 

This is a PHP CLI minification tool for CSS and JavaScript. It uses Matthias Mullie's [minify](https://github.com/matthiasmullie/minify) library as an engine.  

## Installation/Usage

1. Grab the `build/minify.phar` archive 
2. Make it global: `cp build/minify.phar /usr/local/bin/minify && sudo chmod +x /usr/local/bin/minify`
3. Create a minify.ini on your project. Follow the sample file.
4. Run `minify`

## Build from Source

1. Clone or download the repo and `cd` into it
2. Run: `php build.php`
3. Follow the installation guide above

## Road Map

- Introduce configurability from the `minify.ini` file.
- Introduce autoload

## License
PHP CLI Minify is [MIT](http://opensource.org/licenses/MIT) licensed.
