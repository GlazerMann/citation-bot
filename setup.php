<?php
declare(strict_types=1);
error_reporting(E_ALL);
if (file_exists('git_pull.lock')) {
  sleep(5);
  exit('<!DOCTYPE html><html lang="en" dir="ltr"><head><title>Citation Bot: error</title></head><body><h1>GIT pull in progress - please retry again in a moment</h1></body></html>');
}

/*
 * setup.php sets up the environment
 * Most of the page expansion depends on everything else
 */

if (isset($_REQUEST["wiki_base"])){ 
  $wiki_base = trim((string) $_REQUEST["wiki_base"]);
  if (!in_array($wiki_base, ['en', 'simple'])) {
     exit('<!DOCTYPE html><html lang="en" dir="ltr"><head><title>Citation Bot: error</title></head><body><h1>Unsupported wiki requested - aborting</h1></body></html>');
  }
} else {
  $wiki_base = 'en';
}
define("WIKI_ROOT", 'https://'. $wiki_base . '.wikipedia.org/w/index.php');
define("API_ROOT", 'https://'. $wiki_base . '.wikipedia.org/w/api.php');
unset($wiki_base);
define("BOT_USER_AGENT",  "Citation_bot; citations@tools.wmflabs.org");

ini_set("user_agent", BOT_USER_AGENT);
include_once './vendor/autoload.php';

define("TRAVIS", (bool) getenv('CI')); // Not just TRAVIS, but GitHub actions set this to true
define("USE_CITOID", TRUE); // Define which Zotero to use
if (isset($_REQUEST["page"]) && (string) $_REQUEST["page"] === "User:AManWithNoPlan/sandbox3") {
  define('EDIT_AS_USER', TRUE);
}

if (TRAVIS || isset($argv)) {
  define("HTML_OUTPUT", FALSE);
} else {
  define("HTML_OUTPUT", TRUE);
}

// This is needed because the Gadget API expects only JSON back, therefore ALL output from the citation bot is thrown away
if (strpos((string) @$_SERVER['PHP_SELF'], '/gadgetapi.php') === FALSE) {
  define("FLUSHING_OKAY", TRUE);
} else {
  define("FLUSHING_OKAY", FALSE);
}

if (isset($_REQUEST["slow"]) || TRAVIS || (isset($argv[2]) && $argv[2] === '--slow')) {
  define("SLOW_MODE", TRUE);
} elseif (isset($argv[2])) {
  exit("Unexpected text on the command.  Only --slow is valid second argument.");
} else {
  define("SLOW_MODE", FALSE);
}

ob_implicit_flush();
flush();
if (!TRAVIS) {
    if (FLUSHING_OKAY) {
      while (ob_get_level()) {
        ob_end_flush();
      }
      ob_start(); // will flush every five seconds or on "critical" printouts
    } else {
      ob_start();
    }
}

if (file_exists('env.php')) {
  // Set the environment variables with putenv(). Remember to set permissions (not readable!)
  ob_start();
  /** @psalm-suppress MissingFile */
  include_once('env.php');
  $env_output = trim(str_replace(['Reading authentication tokens from tools.wmflabs.org.',
                                  'Reading authentication tokens from tools.wmflabs.org-dev.',
                                  'Reading authentication tokens from citations.toolforge.org.',
                                  'Reading authentication tokens from citations-dev.toolforge.org.',
                                  'Reading authentication tokens.',
                                  ' '],
                                 ['', '', '', '', '', ''], ob_get_contents()));
  if ($env_output) {
    ob_end_flush();  // Something unexpected, so print it out
    unset($env_output);
  } else {
    ob_end_clean();
  }
}

mb_internal_encoding('UTF-8');
ini_set("memory_limit", "800M"); // Needed for "Skin Cancer" and other large pages
date_default_timezone_set('UTC');

/** @psalm-suppress UnusedFunctionCall */
stream_context_set_default(['http' => ['timeout' => 20]]);
ini_set('default_socket_timeout', '20');

define("PHP_ADSABSAPIKEY", (string) getenv("PHP_ADSABSAPIKEY"));
define("PHP_GOOGLEKEY", (string) getenv("PHP_GOOGLEKEY"));
define("PHP_S2APIKEY", (string) getenv("PHP_S2APIKEY"));

function check_blocked() : void {
  if (!TRAVIS && ! WikipediaBot::is_valid_user('Citation_bot')) {
    echo '</pre><div style="text-align:center"><h1>The Citation Bot is currently blocked because of disagreement over its usage.</h1><br/><h2><a href="https://en.wikipedia.org/wiki/User_talk:Citation_bot" title="Join the discussion" target="_blank">Please join in the discussion</a></h2></div><footer><a href="./" title="Use Citation Bot again">Another&nbsp;page</a>?</footer></body></html>';
    exit();
  }
}

function unlock_user() : void {
  if (!HTML_OUTPUT) return;
  @session_start();
  unset($_SESSION['big_and_busy']);     
  @session_write_close();
}

function sig_handler(int $signo) : void {
  exit(); 
}

function check_overused() : void {
 if (!HTML_OUTPUT) return;
 if (isset($_SESSION['big_and_busy']) && $_SESSION['big_and_busy'] === 'BLOCK3') {
   echo '</pre><div style="text-align:center"><h1>Run blocked by your existing big run.</h1></div><footer><a href="./" title="Use Citation Bot again">Another</a>?</footer></body></html>';
   exit();
 }
 @session_start();
 $_SESSION['big_and_busy'] = 'BLOCK3';
 define('BIG_JOB_MODE', 'YES');
 register_shutdown_function('unlock_user');
 @session_write_close();
 pcntl_signal(SIGTERM, "sig_handler"); // By default SIGTERM does not call exit()
}

function check_killed() : void {
 if (!HTML_OUTPUT) return;
 if(!defined('BIG_JOB_MODE')) return;
 @session_start();
 if (isset($_SESSION['kill_the_big_job'])) {
   unset($_SESSION['kill_the_big_job']);
   @session_write_close();
   echo '</pre><div style="text-align:center"><h1>Run killed as requested.</h1></div><footer><a href="./" title="Use Citation Bot again">Another</a>?</footer></body></html>';
   exit();
 }
 @session_write_close();
}

define("MAX_TRIES", 2);
require_once 'constants.php';
require_once 'Comment.php';
require_once 'user_messages.php';
require_once 'NameTools.php';
require_once 'WikipediaBot.php';
require_once 'Parameter.php';
require_once 'expandFns.php';
require_once 'Template.php';
require_once 'Zotero.php';
require_once 'apiFunctions.php';
require_once 'Page.php';

define("MAX_PAGES", 2850);
define("BIG_RUN", 3);


