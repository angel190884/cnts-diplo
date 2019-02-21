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
            'name' => 'angel daniel',
            'last_name' => 'peregrino juarez',
            'email' => 'angel190884@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole(['god','admin']);


        $user=factory(User::class)->create([
            'name' => 'aide',
            'last_name' => 'velazquez',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('admin');

        $user=factory(User::class)->create([
            'name' => 'Israel Alejandro',
            'last_name' => 'Néquiz Martinez',
            'email' => 'drnequiz@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('teacher');

        $user=factory(User::class)->create([
            'name' => 'Gloria',
            'last_name' => 'Estrada García',
            'email' => 'gloriaestradagdiplom@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('teacher');

        $user=factory(User::class)->create([
            'name' => 'José Luis',
            'last_name' => 'Salazar Bailón',
            'email' => 'serviciosocial.cnts@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('teacher');

        $user=factory(User::class)->create([
            'name' => 'Francisco Julian',
            'last_name' => 'Hernández Alvarado',
            'email' => 'f.j.h.a.2016@gmail.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('teacher');

        $user=factory(User::class)->create([
            'name' => 'name student',
            'last_name' => 'lastname student',
            'email' => 'student@student.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'course_id' => '1',
            'file_voucher' => 'vouchers/test.pdf',
            'file_paid_voucher' => 'paid_vouchers/test.pdf'
        ]);
        $user->assignRole('student');

        $user=factory(User::class)->create([
            'name' => 'name authenticated',
            'last_name' => 'lastname authenticated',
            //'email' => 'authenticated@authenticated.com',
            'email' => 'angel_190884@hotmail.com',
            'telefono' => '5534605542',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
        $user->assignRole('authenticated');


        for ($i = 0; $i < 3; ++$i) {
            $user=factory(User::class)->create();
            $user->assignRole('teacher');
        }

        for ($i = 0; $i < 10; ++$i) {
            $user=factory(User::class)->create([
                'course_id' => '1'
            ]);
            $user->assignRole('authenticated');
        }
        for ($i = 0; $i < 10; ++$i) {
            $user=factory(User::class)->create([
                'course_id' => '2'
            ]);
            $user->assignRole('authenticated');
        }
        for ($i = 0; $i < 10; ++$i) {
            $user=factory(User::class)->create([
                'course_id' => '1',
                'file_voucher' => 'vouchers/test.pdf',
                'file_paid_voucher' => 'paid_vouchers/test.pdf'
            ]);
            $user->assignRole('student');
        }
        for ($i = 0; $i < 10; ++$i) {
            $user=factory(User::class)->create([
                'course_id' => '2',
                'file_voucher' => 'vouchers/test.pdf',
                'file_paid_voucher' => 'paid_vouchers/test.pdf'
            ]);
            $user->assignRole('student');
        }
    }
}
