<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Admin;
use App\Http\Controllers\EmailController;
class AdminSeeder extends Seeder
{

	protected $EmailController;
    public function __construct(EmailController $EmailController)
    {
        $this->EmailController = $EmailController;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$key = mt_rand(100000, 999999);
        $user= new User;
        $user['name']      = 'admin';
        $user['email']     = 'schooltahader@gmail.com';
        $user['role']      = 'admin';
        $user['verficationkey'] = $key;
        $user['isblock'] = 0;
        $user['password']  = Hash::make('admin@1997School');
        $user->save();

        Admin::create([
            'admin_name'     => 'admin',
            'admin_phone'    => '0992884727',
             'admin_email'   => 'schooltahader@gmail.com',
             'user_id' => $user->id
        ]);

        $this->EmailController->sendEmailVerfication('schooltahader@gmail.com','verfication Acount Tahder',$key,'admin@1997School');
    }
}
