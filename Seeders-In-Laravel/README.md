## How To Work With Seeders
## Step 1:- Create A Model File 

```bash
#write in your project terminal
php artisan make:model <your model name should be similar to your table name please don't add (s) at last>

```
## Step 2:- Create A Seeder File

```bash
php artisan make:seeder <your model name>Seeder

```
## Step 3:- Go to Database/Seeders/(your created seeder file)

```bash
#add this snippets
use App\Models\<your model class name>;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            student::create([
                '<table first field name>'=>'<your data>',
                '<table second field name>'=>'<your data>'
            ]);
        }
    }
}

```
## Step 4:- Go to Seeders/DatabaseSeeder.php

```bash
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            <your seeder class name>::class
        ]);
    }
}

```
## Step 5:- Seed All The Datas To Database

```bash
php artisan db:seed
```
