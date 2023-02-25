# Kirby Headless Starterkit

This repo is my own starterkit for Headless Kirby 3 projects.

## Requirements

+ PHP version > 8.
+ [Composer](https://getcomposer.org/doc/00-intro.md)


## Install and run Kirby

1. `composer install`
2. `composer update`
3. `composer start`
4. Create an API user at(`{url}/panel`).

## Folder structure and important files

```
.
├── content
├── kirby
├── media
├── site
│   ├── blueprints
│   │   └── users
│   │       ├── api.yml
│   │       └── default.yml
│   ├── config
│   │   └── config.php
│   └── plugins
│       └── kql
└── vendor
```
