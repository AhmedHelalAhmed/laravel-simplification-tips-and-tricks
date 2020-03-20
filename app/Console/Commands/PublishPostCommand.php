<?php

namespace App\Console\Commands;

use App\Actions\PublishPostAction;
use App\Actions\ShowPostAction;
use Illuminate\Console\Command;

class PublishPostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:publish-post {postId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the post of given id';
    /**
     * @var PublishPostAction
     */
    private $publishPostAction;
    /**
     * @var ShowPostAction
     */
    private $showPostAction;

    /**
     * Create a new command instance.
     *
     * @param PublishPostAction $publishPostAction
     * @param ShowPostAction $showPostAction
     */
    public function __construct(PublishPostAction $publishPostAction,ShowPostAction $showPostAction)
    {
        parent::__construct();
        $this->publishPostAction = $publishPostAction;
        $this->showPostAction = $showPostAction;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $post=$this->showPostAction->execute($this->argument('postId'));
        $this->publishPostAction->execute($post);

    }
}
