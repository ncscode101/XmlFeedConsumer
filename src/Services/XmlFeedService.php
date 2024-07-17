<?php

namespace ncscode101\XmlFeedConsumer\Services;

use Illuminate\Support\Facades\Http;

class XmlFeedService
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function fetchFeed()
    {
        $response = Http::get($this->url);
        if ($response->successful()) {
            return $response->body();
        }

        throw new \Exception('Unable to fetch XML feed');
    }
}
