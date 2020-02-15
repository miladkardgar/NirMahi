<?php

use Illuminate\Database\Seeder;

class pool extends Seeder
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
                    'name'=>'شماره یک',
                    'type'=>'1',
                    'width'=>'',
                    'height'=>'',
                    'radish'=>'10000',
                    'start_date'=>'2019-12-02',
                    'status'=>'1',
                ],
                [
                    'name'=>'شماره دو',
                    'type'=>'1',
                    'width'=>'',
                    'height'=>'',
                    'radish'=>'10000',
                    'start_date'=>'2019-12-02',
                    'status'=>'1',
                ],
            ];
        \App\pool::created($data);
    }
}
