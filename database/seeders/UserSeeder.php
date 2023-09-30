<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ho = ['Nguyễn', 'Lê', 'Phan', 'Phạm', 'Trần', 'Hồ', 'Bùi'];
        $lot = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Kim', ''];
        $ten = ['Vy', 'Hiếu', 'Quân', 'Duy', 'Thuận', 'Anh', 'Mai'];
        $usedEmails = [];
    
        for ($i = 0; $i < 10; $i++) {
            $ht = Arr::random($ho). ' ' . Arr::random($lot). ' ' . Arr::random($ten);
            $phone = rand(1000000000, 9999999999);
    
            do {
                $email = Str::random(3) . '@gmail.com';
            } while (in_array($email, $usedEmails));
    
            $usedEmails[] = $email;
    
            $role_id = rand(1, 2);
    
            DB::table('users')->insert([
                'name' => $ht,
                'phone' => $phone,
                'address' => 'HCM',
                'email' => $email,
                'password' => bcrypt('123'),
                'role_id' => $role_id,
            ]);
        }
    }
}
