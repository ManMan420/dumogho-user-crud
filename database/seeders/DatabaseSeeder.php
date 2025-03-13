<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $names = ["John Doe", 
                  "D. B. Holder", 
                  "Manuel Lopsom", 
                  "Maria Lobotomy", 
                  "Jonh Opal",
                  "Edward Johnson",
                  "Carl Jaskstones",
                  "Peter Griefer",
                  "Anak Sunamun",
                  "Andres Bonnerfacial"];
        
        $n = 0;
        $password = 12345;
        foreach ($names as $name){
            User::factory()->create([
                'name' => $name,
                'email' => $n . '@example.com',
                'password' => bcrypt($password)]);
                $n += 1;}
    }
}
