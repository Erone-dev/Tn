<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class articleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        return [
            'name'=>$faker->text(20),
            'content'=>$faker->text().$faker->text().$faker->text(),
            'views_num'=>$faker->randomDigitNotNull,
            'created_at'=>$faker->dateTime,
            'updated_at'=>$faker->dateTime
        ];
    }
}
