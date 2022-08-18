<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'kenji',
                'phone' => '01234',
                'email' => 'kenji@co.jp',
            ],
            [
                'name' => 'takashi',
                'phone' => '6786',
                'email' => 'takashi@co.jp',
            ],
            [
                'name' => 'miyuki',
                'phone' => '067387',
                'email' => 'miyuki@co.jp',
            ],
            [
                'name' => 'miyabi',
                'phone' => '3493879',
                'email' => 'miyabi@co.jp',
            ]
        ]);
    }
}
