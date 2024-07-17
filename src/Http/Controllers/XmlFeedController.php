<?php

namespace ncscode101\XmlFeedConsumer\Http\Controllers;

use App\Http\Controllers\Controller;
use ncscode101\XmlFeedConsumer\Services\XmlFeedService;
use Illuminate\Http\Request;

class XmlFeedController extends Controller
{
    protected $xmlFeedService;

    public function __construct(XmlFeedService $xmlFeedService)
    {
        $this->xmlFeedService = $xmlFeedService;
    }

    public function index()
    {
        try {
            $xmlData = $this->xmlFeedService->fetchFeed();
            $parsedData = simplexml_load_string($xmlData);

            // Process the parsed data as needed
            return response()->json($parsedData);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
