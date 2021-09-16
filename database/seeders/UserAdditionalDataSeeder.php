<?php

namespace Database\Seeders;

use App\Models\UserAdditionalData;
use Illuminate\Database\Seeder;

class UserAdditionalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userDataRecords = [
            ['name'=>'Name1', 'email'=>'test1@test.com', 'message'=>'message1'],
            ['name'=>'Name2', 'email'=>'test2@test.com', 'message'=>'message2'],
            ['name'=>'Name3', 'email'=>'test3@test.com', 'message'=>'message3'],
            ['name'=>'Name4', 'email'=>'test4@test.com', 'message'=>'message4'],
            ['name'=>'Name5', 'email'=>'test5@test.com', 'message'=>'message5'],
            ['name'=>'Name6', 'email'=>'test6@test.com', 'message'=>'message6'],
            ['name'=>'Name7', 'email'=>'test7@test.com', 'message'=>'message7'],
            ['name'=>'Name8', 'email'=>'test8@test.com', 'message'=>'message8'],
        ];

        UserAdditionalData::insert($userDataRecords);
    }
}
