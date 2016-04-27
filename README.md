Plugin-Disqus ![Statamic v1](https://img.shields.io/badge/statamic-v1-lightgrey.svg?style=flat-square)
=============

[Disqus](http://disqus.com) is a third-party comments service. A really good one. This will make using them with Statamic really, really easy.
Disqus plugin for Statamic.

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `disqus` (Github timestamps the download folder).
3. Enjoy.

## Usage

Add Disqus comments to your page by dropping in the tag and setting the `account` parameter
    
    {{ disqus:comments account="username" }}

## Parameters

- `account`: your disqus account
- `dev`: set to true/false to turn on developer mode
