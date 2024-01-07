## How To Work With Factory
## Step 1:- Create A Model File 

```bash
#write in your project terminal
php artisan make:model <your model name should be similar to your table name please don't add (s) at last>

```
## Step 2:- Create A Factory File

```bash
php artisan make:factory <your model name>Factory

```
## Step 3:- Go to Database/Factories/(your created factory file)

```bash
#add this snippets
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             '<table first field name>'=>'<your data>',
              '<table second field name>'=>'<your data>
        ];
    }
}


```
## Step 4:- Go to Seeders/DatabaseSeeder.php

```bash
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\<model class name>;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        <model class name>::factory(20)->create();
    }
}


```
## Step 5:- Seed All The Datas To Database

```bash
php artisan db:seed
```
## To Make Your Factory File And Model File In Same Time

```bash
php artisan make:factory <your factory name>Factory --model=<your table name without appending 's' at end>
```
## To Make Your Model File And Factory File In Same Time

```bash

php artisan make:model <your table name without appending 's' at end> -f

```
## To Run Custom Seeder File

```bash
php artisan db:seed --class=<your seeder class name>
```

## To Migrate And Seeding

```bash
php artisan migrate:fresh --seed
```
