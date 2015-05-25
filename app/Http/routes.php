<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



function parseBaseUrl($url) {
  $url = parse_url($url);
  $domain = explode('.', $url['host']);
  
  if ($domain[0] == "www") {
	  $domainas = array_shift($domain);
  }
 
  if(sizeof($domain) > 1) {
	  return $domain[0] . '.' . $domain[1];
  }
  return $domain[0];
}

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('feed', function() {
	
$feed = new SimplePie();

$feed_ary = array();
$feed_ary[] = 'http://www.delfi.lt/rss/feeds/economy.xml';
$feed_ary[] = 'http://www.businessinsider.in/rss_section_feeds/21807543.cms';
$feed_ary[] = 'http://hbswk.hbs.edu/rss/rss.xml';
$feed_ary[] = 'http://feeds.feedburner.com/entrepreneur/startingabusiness.rss';
$feed_ary[] = 'http://feeds.feedburner.com/entrepreneur/growingyourbusiness.rss';
$feed_ary[] = 'http://feeds.feedburner.com/entrepreneur/ebiz';
$feed_ary[] = 'http://feeds.feedburner.com/Techcrunch/europe';
$feed_ary[] = 'http://feeds.feedburner.com/TechCrunch/startups';
$feed_ary[] = 'http://feeds.feedburner.com/TechCrunch/fundings-exits';
$feed_ary[] = 'http://feeds.feedburner.com/thenextweb';
$feed_ary[] = 'http://feeds.venturebeat.com/VentureBeat';
$feed_ary[] = 'http://www.pinigukarta.lt/feed';

$feed->set_feed_url($feed_ary);

$feed->set_cache_location(storage_path() . '/cache');


// Run SimplePie.
$success = $feed->init();

$feed->handle_content_type();
	
	return View::make('feed')->with('feed', $feed);
	
	
});



