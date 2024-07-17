# XmlFeedConsumer
A Laravel package to consume XML feed
Laravel version ^10

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

#Usage
```
Initialize Service
$xmlFeedService = app(\ncscode101\XmlFeedConsumer\Services\XmlFeedService::class);

// Fetch the XML data from the service
$xmlData = $xmlFeedService->fetchFeed();

// Parse the XML data into an array
$xmlFileData = json_decode(json_encode(simplexml_load_string($xmlData, 'SimpleXMLElement', LIBXML_NOCDATA)), true);

// Return the parsed data as JSON response
return response()->json($xmlFileData);
```
