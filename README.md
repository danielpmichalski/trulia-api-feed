trulia-api-feed
===============

A PHP library for generating XML feed files to Trulia.com website.

Example of usage:

include_once('TruliaFeedBuilderFactory.php');

$location = new Location("Winterfell", 12345);

$details = new Details(150000);

$landing_page = new LandingPage("http://winterfell.com/");

$agent = new Agent("John Snow", "john.snow@winterfell.com");

$property = new Property(new ListingType(ListingType::RENTAL), new Status(Status::FOR_RENT), 
                         $location, $details, $landing_page, $agent);

$feed_builder = TruliaFeedBuilderFactory::createBuilder();

$feed_string = $feed_builder->generateFeed(new Properties($property));
