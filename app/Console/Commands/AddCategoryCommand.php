<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class AddCategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'menu:category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new category';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask('What is category name?');

        if($this->confirm('Are you ready to insert "' . $name .'"?')){
            $category = Category::create([
                'name' => $name,
            ]);
            return $this->info('Added: '. $category->name);
        }
        $this->warn("No new category was added.");
    }
}
