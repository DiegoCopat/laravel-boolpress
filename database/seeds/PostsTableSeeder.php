<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 10; $i++) {

            $newPost = new Post();

            $newPost->title = "Titolo articolo " . $i;
            $newPost->content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, illo adipisci incidunt voluptatibus blanditiis hic animi voluptatum reiciendis et sapiente. Nam, aspernatur. Non harum repellat, id praesentium temporibus in quidem laboriosam dolores dolorem, eius, earum ratione eos tempore necessitatibus. Impedit dolores adipisci enim necessitatibus maxime quos corrupti rem. Reprehenderit voluptatibus esse minima earum veritatis amet praesentium incidunt eligendi facilis accusamus culpa ad, quo perspiciatis, repudiandae recusandae vero vitae vel quia. Dignissimos atque itaque, earum quisquam fugit facere accusantium sequi provident modi aperiam dolorum voluptas magni temporibus consequuntur quo voluptatibus rem, mollitia quas veritatis maxime? Nisi consectetur temporibus exercitationem doloremque ipsam.";
            $newPost->slug = Str::slug($newPost->title,"-");

            $newPost->save();

        }
    }
}
