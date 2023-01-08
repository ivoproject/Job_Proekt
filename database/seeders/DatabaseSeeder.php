<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\User;
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
        $user=User::factory()->create([
            'name' => 'White Rabbit',
            'email'=> 'white@email.com'
        ]);
         Jobs::create(
            [
                'title' => 'Laravel Senior Developer', 
                'user_id' => $user->id,
                'tags' => 'laravel, javascript',
                'company' => 'Laravel Corp',
                'location' => 'Bulgaria, VT',
                'email' => 'email1@email.com',
                'website' => 'https://www.laravel.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
            ],
         );
         Jobs::create(
            [
                'title' => 'Full-Stack Engineer',
                'user_id' => $user->id,
                'tags' => 'laravel, backend ,api',
                'company' => 'Bulgaria Industries',
                'location' => 'Bulgaria, VT',
                'email' => 'email2@email.com',
                'website' => 'https://www.php.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
              ],
         );
         Jobs::create(
            [
                'title' => 'Laravel Developer', 
                'user_id' => $user->id,
                'tags' => 'laravel, vue, javascript',
                'company' => 'Wayne Enterprises',
                'location' => 'Gotham, NY',
                'email' => 'email3@email.com',
                'website' => 'https://www.wayneenterprises.com',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
              ],
         );
    }
}
