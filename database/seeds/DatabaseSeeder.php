<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

  //  private function randomString($length) {
  //  	$str = "";
  //  	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
  //  	$max = count($characters) - 1;
  //  	for ($i = 0; $i < $length; $i++) {
  //  		$rand = mt_rand(0, $max);
  //  		$str .= $characters[$rand];
  //  	}
  //  	return $str;
  //  }

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$rand = $this->randomString(10);
        DB::table('reminders')->insert([
            'rand' => str_random(10),
            'content' => str_random(140),
            'author' => str_random(10),
            'email' => str_random(10).'@gmail.com',
        ]);
    }
}
