# XmlFeedConsumer
A Laravel package to consume XML feed

Add the repository to your composer.json:

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/ncscode101/xml-feed-consumer"
    }
],
```
```
composer require ncscode101/xml-feed-consumer
```

## Publish Config
```
php artisan vendor:publish --provider="ncscode101\XmlFeedConsumer\XmlFeedConsumerServiceProvider"
```

env
```
XML_FEED_URL=https://example.com/your-feed-url
```

