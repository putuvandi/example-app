<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Vandi Setyawan',
        //     'email' => 'vs@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Putu Vandi',
        //     'email' => 'pv@example.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque! Harum, nam unde praesentium iusto dolor possimus natus, dolore maiores corporis illo laboriosam, blanditiis in veritatis? Recusandae, consequuntur? Eum, rem voluptatem. Id quis sint pariatur maxime omnis totam culpa distinctio unde numquam qui, ad dolores nostrum ea aperiam? Nulla laudantium sapiente dolor quibusdam eius quia asperiores facilis ipsa atque incidunt, repudiandae voluptatum in inventore maxime beatae aut obcaecati, vero laboriosam unde deserunt itaque similique suscipit fuga eligendi? Dignissimos cum excepturi reprehenderit facilis dolore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque! Harum, nam unde praesentium iusto dolor possimus natus, dolore maiores corporis illo laboriosam, blanditiis in veritatis? Recusandae, consequuntur? Eum, rem voluptatem. Id quis sint pariatur maxime omnis totam culpa distinctio unde numquam qui, ad dolores nostrum ea aperiam? Nulla laudantium sapiente dolor quibusdam eius quia asperiores facilis ipsa atque incidunt, repudiandae voluptatum in inventore maxime beatae aut obcaecati, vero laboriosam unde deserunt itaque similique suscipit fuga eligendi? Dignissimos cum excepturi reprehenderit facilis dolore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque! Harum, nam unde praesentium iusto dolor possimus natus, dolore maiores corporis illo laboriosam, blanditiis in veritatis? Recusandae, consequuntur? Eum, rem voluptatem. Id quis sint pariatur maxime omnis totam culpa distinctio unde numquam qui, ad dolores nostrum ea aperiam? Nulla laudantium sapiente dolor quibusdam eius quia asperiores facilis ipsa atque incidunt, repudiandae voluptatum in inventore maxime beatae aut obcaecati, vero laboriosam unde deserunt itaque similique suscipit fuga eligendi? Dignissimos cum excepturi reprehenderit facilis dolore?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam unde consequatur, sed, aliquid doloremque velit nobis nostrum soluta numquam, officia vel. Dolore reiciendis deserunt ipsa porro eaque! Harum, nam unde praesentium iusto dolor possimus natus, dolore maiores corporis illo laboriosam, blanditiis in veritatis? Recusandae, consequuntur? Eum, rem voluptatem. Id quis sint pariatur maxime omnis totam culpa distinctio unde numquam qui, ad dolores nostrum ea aperiam? Nulla laudantium sapiente dolor quibusdam eius quia asperiores facilis ipsa atque incidunt, repudiandae voluptatum in inventore maxime beatae aut obcaecati, vero laboriosam unde deserunt itaque similique suscipit fuga eligendi? Dignissimos cum excepturi reprehenderit facilis dolore?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
