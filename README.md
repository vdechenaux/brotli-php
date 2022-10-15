[![CircleCI](https://circleci.com/gh/vdechenaux/brotli-php/tree/master.svg?style=svg)](https://circleci.com/gh/vdechenaux/brotli-php/tree/master)

# Features

This library adds Brotli support to PHP (>= 7.4)

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

### Using apt

You can use Brotli binary from `apt` if you are using:
- Ubuntu >= xenial (16.04)
- Debian >= stretch (9)

```
$ apt install brotli 
```

### Using Homebrew

```
$ brew install brotli 
```
