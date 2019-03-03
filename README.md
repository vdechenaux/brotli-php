[![Build Status](https://travis-ci.org/vdechenaux/brotli-php.svg?branch=master)](https://travis-ci.org/vdechenaux/brotli-php)

# Features

This library adds Brotli support to PHP (>= 7.1)

```php
function brotli_compress(string $data, int $quality = 11): string

function brotli_uncompress(string $data): string
```

# Installation


## Library
```
$ composer require vdechenaux/brotli
```

You are almost done ! **Read the next section to complete the setup.**

## Binary
This command will only install the PHP code, but a binary file is also needed. 
This binary is provided by 2 packages, depending of your environment:

- Linux AMD64
```
$ composer require vdechenaux/brotli-bin-amd64
```

- Linux i386
```
$ composer require vdechenaux/brotli-bin-i386
```

The binary will be automatically used by this library.
You don't need to configure something after binary installation.
