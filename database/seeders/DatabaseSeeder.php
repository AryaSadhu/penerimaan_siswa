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
        
        User::create([
            'name' => 'Arya Sadhu',
            'username'=>'Sadhu',
            'email' => 'madearyasadhu@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem. Doloribus harum sit mollitia quae ea, error quas maxime provident aliquid omnis enim magni nisi incidunt alias, tempore quos quaerat. Totam quos omnis aut sed eius? Sunt repellat ipsam fugiat quia voluptatem excepturi fuga quis voluptatibus eaque, atque perferendis veritatis, dolor ullam! Asperiores numquam distinctio quasi quia ab voluptates sed alias veniam dolorum! Velit sapiente earum perspiciatis, aut expedita magni ratione. Labore doloremque vitae vero nemo ipsa impedit, eaque quidem quaerat incidunt voluptas ducimus cupiditate commodi sequi fugiat eligendi odit, aspernatur veritatis. Doloribus dignissimos nesciunt eius veritatis fugiat obcaecati.',
        //     'category_id' => 1,
        //     'user_id' =>  1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem. Doloribus harum sit mollitia quae ea, error quas maxime provident aliquid omnis enim magni nisi incidunt alias, tempore quos quaerat. Totam quos omnis aut sed eius? Sunt repellat ipsam fugiat quia voluptatem excepturi fuga quis voluptatibus eaque, atque perferendis veritatis, dolor ullam! Asperiores numquam distinctio quasi quia ab voluptates sed alias veniam dolorum! Velit sapiente earum perspiciatis, aut expedita magni ratione. Labore doloremque vitae vero nemo ipsa impedit, eaque quidem quaerat incidunt voluptas ducimus cupiditate commodi sequi fugiat eligendi odit, aspernatur veritatis. Doloribus dignissimos nesciunt eius veritatis fugiat obcaecati.',
        //     'category_id' => 1,
        //     'user_id' =>  1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem. Doloribus harum sit mollitia quae ea, error quas maxime provident aliquid omnis enim magni nisi incidunt alias, tempore quos quaerat. Totam quos omnis aut sed eius? Sunt repellat ipsam fugiat quia voluptatem excepturi fuga quis voluptatibus eaque, atque perferendis veritatis, dolor ullam! Asperiores numquam distinctio quasi quia ab voluptates sed alias veniam dolorum! Velit sapiente earum perspiciatis, aut expedita magni ratione. Labore doloremque vitae vero nemo ipsa impedit, eaque quidem quaerat incidunt voluptas ducimus cupiditate commodi sequi fugiat eligendi odit, aspernatur veritatis. Doloribus dignissimos nesciunt eius veritatis fugiat obcaecati.',
        //     'category_id' => 2,
        //     'user_id' =>  1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aspernatur quidem. Doloribus harum sit mollitia quae ea, error quas maxime provident aliquid omnis enim magni nisi incidunt alias, tempore quos quaerat. Totam quos omnis aut sed eius? Sunt repellat ipsam fugiat quia voluptatem excepturi fuga quis voluptatibus eaque, atque perferendis veritatis, dolor ullam! Asperiores numquam distinctio quasi quia ab voluptates sed alias veniam dolorum! Velit sapiente earum perspiciatis, aut expedita magni ratione. Labore doloremque vitae vero nemo ipsa impedit, eaque quidem quaerat incidunt voluptas ducimus cupiditate commodi sequi fugiat eligendi odit, aspernatur veritatis. Doloribus dignissimos nesciunt eius veritatis fugiat obcaecati.',
        //     'category_id' => 2,
        //     'user_id' =>  2
        // ]);
    }
}
