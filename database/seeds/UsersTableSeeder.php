<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=factory(User::class)->create([
            'name' => 'angel daniel peregrino juarez',
            'email' => 'angel190884@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole(Role::all());

        $user=factory(User::class)->create([
            'name' => 'administrador',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('admin');

        for ($i = 0; $i < 4; ++$i) {
            $user=factory(User::class)->create();
            $user->assignRole('teacher');
        }

        for ($i = 0; $i < 40; ++$i) {
            $user=factory(User::class)->create();
            $user->assignRole('authenticated');
        }
    }
}
