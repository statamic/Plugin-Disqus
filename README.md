Plugin-Disqus
=============

[Disqus](http://disqus.com) is a third-party comments service. A really good one. This will make using them with Statamic really, really easy.
Disqus plugin for Statamic.

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `disqus` (Github timestamps the download folder).
3. Enjoy.

## Usage - Comments

Add Disqus comments to your page by dropping in the `disqus:comments` tag and setting the `account` parameter
    
    {{ disqus:comments account="username" }}

## Parameters - Comments

- `account`: your disqus account
- `dev`: _optional_ set to true/false to turn on developer mode
- `url`: _optional_ set to “{url}” to use the relative path of the page as the URL to uniquely identify each page. Useful if you host your site with two URLS (e.g. for testing purposes) as comment counts and comments will work correctly. This parameter is passed to the `disqus_url` Disqus variable. See [Disqus Javascript Configuration Variables](http://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables#disqus_url) for more details.

## Usage - Comment Count Script

Add the Disqus comment count to your page by dropping in the tag`disqus:countscript` to your page (preferably at the end of the `<body>`).

    {{ disqus:countscript }}

This will embed the Disqus script to replace the following markup:

    <a href="http://example.com/article2.html#disqus_thread">Second article</a>

with the comment count, for example:

    <a href="http://example.com/article2.html#disqus_thread">13 Comments</a>

If you used the `url` parameter above in your Disqus tag then you can use the attribute `data-disqus-identifier` in your anchor links and the href attribute can be whatever you like. See the Disqus help page [Adding comment count links to your home page](http://help.disqus.com/customer/portal/articles/565624-tightening-your-disqus-integration)
