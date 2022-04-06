<?php

use App\Models\Post;
use App\Models\Tag;
use App\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $tag_ids = Tag::pluck('id')->toArray();
        $user_ids = User::pluck('id')->toArray();

        $category_ids = Category::pluck('id')->toArray();
        for ($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->user_id = Arr::random($user_ids);
            $post->category_id = Arr::random($category_ids);
            $post->title = $faker->text(20);
            $post->content = $faker->paragraph(20, false);
            // $post->image = $faker->imageUrl(250, 250);
            $post->slug = Str::slug($post->title, '-');
            $post->save();

            $post_tags = [];
            foreach ($tag_ids as $tag_id) {
                if ($faker->boolean()) $post_tags[] = $tag_id;
            }

            $post->tags()->attach($post_tags);
        }
    }
}
