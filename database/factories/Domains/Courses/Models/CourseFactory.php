<?php
namespace Database\Factories\Domains\Courses\Models;

use App\Domains\Courses\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'        => $this->faker->sentence,
            'description'  => $this->faker->paragraph,
            'header_image' => $this->faker->url,
            'thumb_image'  => $this->faker->url,
            'price'        => $this->faker->randomNumber(4),
            'date'         => $this->faker->dateTimeThisYear,
        ];
    }
}
