<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->name = $faker->sentence(3);
            $project->body = $faker->text(300);
            // $project->cover_img = 'placeholders/' . $faker->image('storage/app/public/placeholders', 600, 300, 'Project', false, false);
            $project->save();
        }
    }
}
