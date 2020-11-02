<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {

          $newComic = new Comic();

          $newComic->title = $faker->text(30);

          if (rand(0, 1) == 1) {
            $newComic->original_title = $faker->text(50);
          }

          $newComic->author = $faker->name();
          $newComic->number = $faker->numberBetween(1, 1000);
          $newComic->n_pages = $faker->numberBetween(20, 400);
          $newComic->edition = $faker->company();
          $newComic->reading = (rand(0, 1) == 1) ? "ltr" : "rtl";  // Operatore ternario: se true, scrivo "ltr", altrimenti "rtl".
          $newComic->price = $faker->randomFloat(2, 1, 9999);
          $newComic->color = rand(0, 1);
          $newComic->release = $faker->year();
          $newComic->cover = $faker->imageUrl(200, 300);

          $newComic->save();
        }
    }
}
