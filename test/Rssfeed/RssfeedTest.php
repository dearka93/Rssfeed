<?php 
namespace Protein\Rssfeed;

class RssfeedTest extends \PHPUnit_Framework_TestCase
{
/*        
    public function testprintFeed()
    {
        $rss = new \Protein\Rssfeed\Rssfeed(['http://www.aftonbladet.se/rss.xml']);
        
        $res = $rss->picRss();
        $this->assertInternalType('string', $res, "Return type in not a string");
    }
*/
    
    public function testClass() {
        $rss = new \Protein\Rssfeed\Rssfeed(['http://www.aftonbladet.se/rss.xml']);
		$test = get_class($rss);
		$exp = "Protein\Rssfeed\Rssfeed";
		$this->assertEquals($test, $exp, "Wrong class");
	}
    
	public function testRssFeed() {
        $rss = new \Protein\Rssfeed\Rssfeed(['http://www.aftonbladet.se/rss.xml']);
		$test = $rss->picRss();
		$this->assertInternalType('string', $test, "Output does not match expected");
	}    
}