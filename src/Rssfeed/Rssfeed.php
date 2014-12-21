<?php 
namespace Protein\Rssfeed; 

class Rssfeed{
    
    private $feed;
    
    
    public function __construct(array $feedUrl)
    {
        require_once(__DIR__ . '/simplepie/simplepie/autoloader.php');
 
        $feed = new \SimplePie();
        
        $feed->set_cache_location(__DIR__ . '/cache');
        
        $feed->set_feed_url($feedUrl);
        
        $feed->init();
        
        $feed->handle_content_type();
        $this->feed = $feed;
    }
    
    public function picRss() {
        date_default_timezone_set('Europe/Stockholm');
        $feed = $this->feed;
        
        $html = null;
        
        foreach ($feed->get_items() as $item) {
            $html .= "<div>
            <h2><a href='{$item->get_permalink()}'target='_blank'>{$item->get_title()}</a></h2>
            <p>{$item->get_description()}</p>
            <p><small>Publiserade: {$item->get_date('D j M Y | g:i a')}</small></p>
            <a href='{$item->get_permalink()}'target='_blank'>Läs mer</a>
            </div>";
        }
        return $html;
    }
    
    public function singleRss() {
		  $feed = $this->feed;    
		  $html = null;
		    
		  foreach ($feed->get_items() as $item) {  
            $html .= "<div>
            <a href='{$item->get_permalink()}'target='_blank'>{$item->get_title()}</a> <small> - {$item->get_date('D j F Y | g:i a')}</small>
				</div>";
            break;
        }
        return $html;
    }
    
    public function nopicRss() {
		  $feed = $this->feed;    
		  $html = null;    
    	  foreach ($feed->get_items() as $item) {
            $html .= "<div>
            <a href='{$item->get_permalink()}'target='_blank'>{$item->get_title()}</a><br><small> - {$item->get_date('D j F Y | g:i a')}</small>
            </div>";
        }
        return $html;
    }
    
}