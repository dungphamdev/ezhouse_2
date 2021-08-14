<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'role_id'   => '1',
          'name'      => 'Mr. Admin',
          'username'  => 'admin',
          'email'     => 'dungphamdev@gmail.com',
          'nid'     => '1016227190',
          'contact'     => '01670605075',
          'created_at' => '2020-09-18 13:20:14',
          'updated_at' => '2020-09-18 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);

    DB::table('users')->insert([
          'role_id'   => '2',
          'name'      => 'Mr. Landlord',
          'username'  => 'landlord',
          'email'     => 'landlord@gmail.com',
          'nid'     => '1016227150',
          'contact'     => '01970605076',
          'created_at' => '2020-09-18 13:20:14',
          'updated_at' => '2020-09-18 13:20:14',
          'password'  => bcrypt('11223344'),
        ],
    );

    DB::table('users')->insert([
        'role_id'   => '2',
        'name'      => 'Mr. Landlord 2',
        'username'  => 'landlord_2',
        'email'     => 'landlord_2@gmail.com',
        'nid'     => '1016227150',
        'contact'     => '01970605076',
        'created_at' => '2020-09-18 13:20:14',
        'updated_at' => '2020-09-18 13:20:14',
        'password'  => bcrypt('11223344'),
      ],
  );

        DB::table('users')->insert([
          'role_id'   => '3',
          'name'      => 'Mr. Renter',
          'username'  => 'renter',
          'email'     => 'renter@gmail.com',
          'nid'     => '1016227180',
          'contact'     => '01870605075',
          'created_at' => '2020-09-18 13:20:14',
          'updated_at' => '2020-09-18 13:20:14',
          'password'  => bcrypt('11223344'),
        ]);

        DB::table('areas')->insert([
            'name'   => 'Hà Nội',
            'user_id'   => '1',
            'created_at' => '2020-09-18 13:20:14',
            'updated_at' => '2020-09-18 13:20:14'
          ]
        );

        DB::table('areas')->insert([
            'name'   => 'TP HCM',
            'user_id'   => '1',
            'created_at' => '2020-09-18 13:20:14',
            'updated_at' => '2020-09-18 13:20:14'
          ]
        );

        DB::table('areas')->insert([
            'name'   => 'Đà Nẵng',
            'user_id'   => '1',
            'created_at' => '2020-09-18 13:20:14',
            'updated_at' => '2020-09-18 13:20:14'
          ]
        );


    }
}
