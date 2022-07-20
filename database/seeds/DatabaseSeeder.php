<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        $this->call(UserSeeder::class);

        DB::table('movies')->truncate();
        $this->call(MovieSeeder::class);

        DB::table('reviews')->truncate();
        $this->call(ReviewSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
