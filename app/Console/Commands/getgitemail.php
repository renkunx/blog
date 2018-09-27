<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client as Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Log;
use App\Spread;
class getgitemail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:getgitemail {url?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get github user email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $url = $this->argument('url');    //网页地址
        $client = new Client();
        $crawler = $client->request('GET', 'https://github.com/');
        $crawler = $client->click($crawler->selectLink('Sign in')->link());
        $form = $crawler->selectButton('Sign in')->form();
        $crawler = $client->submit($form, array(
            'login' => config('app.gitusername'), 
            'password' => config('app.gitpassword') 
        ));
        
        $client->setHeader('accept','application/json');
        $client->setHeader('content-type','application/json');
        $crawler = $client->request('GET',$url.'-data');
        
        Storage::disk('local')->put('github',$client->getResponse()->getContent());

        $contributors = json_decode($client->getResponse()->getContent());
        foreach ($contributors as $key => $value) {
            $author = $value->author;
            $avatar =  $author->avatar;
            // $name =  $author->login;
            // 获取邮件地址
            $client->setHeader('accept','text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8');
            $path =  'https://github.com'.$author->path;
            print $path."\n";
            $crawler = $client->request('GET',$path);
            Log::info($client->getResponse());
            $email = "";
            $org = "";
            $locate = "";
            $name = "";
            $homepage = "";
            try{
                $email = $crawler->filter('.u-email')->text();
                $org = $crawler->filter('.p-org')->text();
                $homepage = $crawler->filter('.u-url')->text();
                $locate = $crawler->filter('.p-label')->text(); 
                $name =  $crawler->filter('.p-name')->text();;
            }catch(\Exception $e){    
                Log::info($e);    
            }
            $categorys = preg_split ('/[\/,]+/',$url);
            if (strlen($email) > 0) {
                $spread = new Spread();
                $spread->name = $name;
                $spread->organization = $org;
                $spread->email = $email;
                $spread->locate = $locate;
                $spread->avatar = $avatar;
                $spread->homepage = $homepage;
                $spread->title = $categorys[2]."/".$categorys[3];
                $spread->category = 'github';
                // dd($spread);
                try{

                    $spread->save();
                }catch(\Exception $e){
                    Log::info($e);
                }
            }
        }
        
    }
}
