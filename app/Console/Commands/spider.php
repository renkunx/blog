<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client as GoutteClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Pool;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;
use App\Article;
class spider extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var contenting
     */
    protected $signature = 'command:spider  {url}';

    /**
     * The console command description.
     *
     * @var contenting
     */
    protected $description = 'php spider web resource';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __concontentuct()
    {
        parent::__concontentuct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        // $concurrency = $this->argument('concurrency');  //并发数
        $url = $this->argument('url');    //查询关键词
        $guzzleClent = new GuzzleClient();
        $client = new GoutteClient();
        $client->setClient($guzzleClent);
        $crawler = $client->request('GET',$url);
        // dd($crawler->html());
        $title = $crawler->filter('.headtext')->text();
        // dd($title);
        $meta = $crawler->filter('meta')->each(function($node) {
            // return [$node->attr('name') => $node->attr('content')];
            return [
                'name' => $node->attr('name'),
                'content' => $node->attr('content'),
            ];
        });
        // dd($meta);

        $imgs = $crawler->filter('img')->each(function($node) {
            // return [$node->attr('name') => $node->attr('content')];
            return [
                'src' => $node->attr('data-src')
            ];
        });
        // dd($imgs);
        $index = rand(0,count($imgs));
        while(!$imgs[$index]['src'])
        {
            $index = rand(0,count($imgs));
        }
        $image = $imgs[$index]['src'];
        $author = $meta[3]['content'];
        $keywords = $meta[2]['content'];
        $descripe = $meta[1]['content'];
        $descripe = preg_replace("/马蜂窝/si","玩转西安",$descripe);
        $content = $crawler->filter('.vc_article')->html();
        //过滤除 data-src 的属性
        $content = preg_replace('/\s(?!(data-src))[a-zA-Z]+=[\'\"]{1}[^\'\"]+[\'\"]{1}/iu','', $content);
        $content = preg_replace("/<([a,d]+)[^>]*>/i","",$content );
        $content = preg_replace("/<\/([a,d]+)[^>]*>/i","",$content );
        $content = preg_replace("/\n|\t/i","",$content );
        $content = preg_replace("/[ +]+/si","",$content);
        $content = preg_replace("/帮助了<b><\/b>名<b><\/b>游客。举报/i","",$content );
        $content = preg_replace("/imgdata-src/si","img src",$content);
        $content = preg_replace("/<p/si","<p ",$content);
        // dd(trim($content));
        $article = new Article();
        $article->title = $title;
        $article->author = $author;
        $article->keywords = $keywords;
        $article->content = $content;
        $article->descripe = $descripe;
        $article->image = $image;
        $article->articleid = preg_split('/\,/',$author)[0];
        // dd(preg_split('/\,/',$author)[0]);
        $article->save();
        // Storage::disk('local')->put($title,$content);
        
        // web 控制台获取文章链接
        // $('.tn-image').each(function(index,value){
        //     console.log(value.children[0].getAttribute('href'))
        //     })
    }
}
