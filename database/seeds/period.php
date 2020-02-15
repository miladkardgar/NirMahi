<?php

use Illuminate\Database\Seeder;

class period extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =
            [
                [
                        'name'=>'آذر 98',
                        'pool_id'=>1,
                        'start_date'=>'2019-12-02',
                ],
                [
                    'name'=>'آذر 98',
                    'pool_id'=>2,
                    'start_date'=>'2019-12-02',
                    'end_date'=>'2020-02-14',
                ]
            ];
        \App\period::created($data);
    }
}
