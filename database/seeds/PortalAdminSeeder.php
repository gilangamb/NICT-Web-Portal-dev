<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PortalAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new User;
        $administrator->email = "administrator@portalnict.test";
        $administrator->password = Hash::make("portalnict");
        $administrator->username = "administrator001";
        $administrator->name = "Portal Administrator";
        $administrator->role_id = 1;
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Sarmili, Bintaro, Tangerang Selatan";
        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
