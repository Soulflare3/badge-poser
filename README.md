Badge-Poser
===========

Use shields for you packagist.org repository, that shows how many times your project has been downloaded from Packagist.org
or its latest stable version.

[![Downloads](https://poser.pugx.org/pugx/badge-poser/d/total.png)](https://packagist.org/packages/pugx/badge-poser)
[![Latest Stable Version](https://poser.pugx.org/pugx/badge-poser/version.png)](https://packagist.org/packages/pugx/badge-poser)
[![Latest Unstable Version](https://poser.pugx.org/pugx/badge-poser/v/unstable.png)](https://packagist.org/packages/pugx/badge-poser)
[![Build Status](https://secure.travis-ci.org/PUGX/badge-poser.png)](http://travis-ci.org/PUGX/badge-poser)
[![License](https://poser.pugx.org/pugx/badge-poser/license.png)](https://packagist.org/packages/pugx/badge-poser)

## How to create your own Badge
-  Go to the [Badge Poser](https://poser.pugx.org) website
-  Insert username/repository and click on `Show`
-  That's it!  Copy the Markdown into the README.md

## Why a composer badge?

Not only because all the other languages already had it, but having the latest stable release in the readme could save time.

## Contribution

Active contribution and patches are very welcome.
See the [github issues](https://github.com/PUGX/badge-poser/issues?state=open) there are some tagged as [easy-pick](https://github.com/PUGX/badge-poser/issues?labels=easy-pick&page=1&state=open).
To keep things in shape we have quite a bunch of unit tests. If you're submitting pull requests please
make sure that they are still passing and if you add functionality please
take a look at the coverage as well it should be pretty high :)

- First fork or clone the repository

```
git clone git://github.com/PUGX/badge-poser.git
cd badge-poser
```

- Install `go-lang`:

```
sudo apt-get update -qq
sudo apt-get install -qq golang git libgtk-3-dev libgtkspell-3-dev libtspi-dev trousers tor mercurial pkg-config libgtkspell-3-0 libgtkspell0
```
- Install `go-buckler`

```
go get github.com/badges/buckler
export SYMFONY__buckler_bin_path=$GOPATH/bin/buckler
```

- Install vendors:

``` bash
php composer.phar self-update
php composer.phar install
```

- run phpunit:

``` bash
./bin/phpunit
```