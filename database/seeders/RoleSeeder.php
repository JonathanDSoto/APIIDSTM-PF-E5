<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $json = file_get_contents(database_path('jsons\roles.json'));
        $data = json_decode($json);
        foreach ($data as $item) {
            Role::create([
                'name' => $item->name,
            ]);
        }
    }
}
