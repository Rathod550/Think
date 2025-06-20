<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;
use Carbon\Carbon;

class PublishBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'publish-blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Blogs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $blogs = Blog::whereDate('post_publish_date', Carbon::today())
            ->where('is_published', 0)
            ->get();

        if(!empty($blogs) && $blogs->count() > 0){
            foreach($blogs as $key => $value){
                $value->update(['is_published' => 1]);
            }
        }
    }
}
