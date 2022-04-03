<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();
        Category::truncate();
        Tag::truncate();

        $category = new Category();
        $category->name='Categoria 1';
        $category->save();

        $category = new Category();
        $category->name='Categoria 2';
        $category->save();

        $tag = new Tag();
        $tag->name = 'Etiqueta 1';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Etiqueta 2';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Etiqueta 3';
        $tag->save();

        $post = new Post();
        $post->title = 'Mi Primer post';
        $post->excerpt = 'contenido del primer post';
        $post->body = 'Mas contenido del primer post';
        $post->category_id = 1;
        $post->published_at = Carbon::now();
        $post->save();

        $post = new Post();
        $post->title = 'Mi Segundo post';
        $post->excerpt = 'contenido del Segundo post';
        $post->body = 'Mas contenido del Segundo post';
        $post->category_id = 1;
        $post->published_at = Carbon::now()->subDays(3);
        $post->save();

        $post = new Post();
        $post->title = 'Mi tercer post';
        $post->excerpt = 'contenido del tercer post';
        $post->body = 'Mas contenido del tercer post';
        $post->category_id = 2;
        $post->published_at = Carbon::now()->subDays(4);
        $post->save();

        $post = new Post();
        $post->title = 'Mi cuarto post';
        $post->excerpt = 'contenido del cuarto post';
        $post->body = 'Mas contenido del cuarto post';
        $post->category_id = 2;
        $post->published_at = Carbon::now()->subDays(5);
        $post->save();

    }
}
