<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // User::create([
        //     'name' => 'Septian Yogi',
        //     'email' => 'septianyogi@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Doddy Kurniawan',
        //     'email' => 'doddykurniawan@gmail.com',
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
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium dignissimos veniam aspernatur laboriosam architecto veritatis eum unde adipisci repellat dolorem vero. Non maxime, facere veritatis ducimus impedit nam officiis possimus placeat asperiores tenetur quasi alias ratione! Sunt repudiandae, repellendus officiis ipsum alias error nihil laboriosam dolorem fugiat magni sit, dicta vel voluptas! Libero repellendus odio quos necessitatibus fuga magni adipisci, quia ex rem ratione officia, suscipit velit perspiciatis. Quaerat dolores illo ipsum laborum sapiente minima odit sint vel, animi facilis in corrupti perferendis? Quisquam excepturi officiis mollitia optio dolore!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium dignissimos veniam aspernatur laboriosam architecto veritatis eum unde adipisci repellat dolorem vero. Non maxime, facere veritatis ducimus impedit nam officiis possimus placeat asperiores tenetur quasi alias ratione! Sunt repudiandae, repellendus officiis ipsum alias error nihil laboriosam dolorem fugiat magni sit, dicta vel voluptas! Libero repellendus odio quos necessitatibus fuga magni adipisci, quia ex rem ratione officia, suscipit velit perspiciatis. Quaerat dolores illo ipsum laborum sapiente minima odit sint vel, animi facilis in corrupti perferendis? Quisquam excepturi officiis mollitia optio dolore!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium dignissimos veniam aspernatur laboriosam architecto veritatis eum unde adipisci repellat dolorem vero. Non maxime, facere veritatis ducimus impedit nam officiis possimus placeat asperiores tenetur quasi alias ratione! Sunt repudiandae, repellendus officiis ipsum alias error nihil laboriosam dolorem fugiat magni sit, dicta vel voluptas! Libero repellendus odio quos necessitatibus fuga magni adipisci, quia ex rem ratione officia, suscipit velit perspiciatis. Quaerat dolores illo ipsum laborum sapiente minima odit sint vel, animi facilis in corrupti perferendis? Quisquam excepturi officiis mollitia optio dolore!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In sunt cumque nam id quae a, vitae, quidem numquam voluptas accusantium dignissimos veniam aspernatur laboriosam architecto veritatis eum unde adipisci repellat dolorem vero. Non maxime, facere veritatis ducimus impedit nam officiis possimus placeat asperiores tenetur quasi alias ratione! Sunt repudiandae, repellendus officiis ipsum alias error nihil laboriosam dolorem fugiat magni sit, dicta vel voluptas! Libero repellendus odio quos necessitatibus fuga magni adipisci, quia ex rem ratione officia, suscipit velit perspiciatis. Quaerat dolores illo ipsum laborum sapiente minima odit sint vel, animi facilis in corrupti perferendis? Quisquam excepturi officiis mollitia optio dolore!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
