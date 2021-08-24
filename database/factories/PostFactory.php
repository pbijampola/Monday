<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "title"=>$this->faker->realText(100),
            "excerpt"=>$this->faker->realText(200),
            "full_post"=>$this->faker->realText(5000),
            "image"=>"https://millardayo.com/wp-content/uploads/2015/09/Millard-Ayo-2.jpg"
        ];
    }
}
