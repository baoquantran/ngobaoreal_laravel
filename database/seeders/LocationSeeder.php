<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('local')->insert([
            ['name' => 'TP.HCM', 'parent_id' => 0],
            ['name' => 'Hà Nội', 'parent_id' => 0],
        ]);
        DB::table('local')->insert([
    
            ['name' => 'Ba Đình', 'parent_id' => 2], 
            ['name' => 'Hoàn Kiếm', 'parent_id' => 2],
            ['name' => 'Hai Bà Trưng', 'parent_id' => 2],
            ['name' => 'Đống Đa', 'parent_id' => 2],
            ['name' => 'Cầu Giấy', 'parent_id' => 2],
            ['name' => 'Thanh Xuân', 'parent_id' => 2],
            ['name' => 'Tây Hồ', 'parent_id' => 2],
            ['name' => 'Ba Vì', 'parent_id' => 2],
            ['name' => 'Chương Mỹ', 'parent_id' => 2],
            ['name' => 'Phúc Thọ', 'parent_id' => 2],
            ['name' => 'Thạch Thất', 'parent_id' => 2],
            ['name' => 'Quốc Oai', 'parent_id' => 2],
            ['name' => 'Sóc Sơn', 'parent_id' => 2],
            ['name' => 'Đông Anh', 'parent_id' => 2],
            ['name' => 'Gia Lâm', 'parent_id' => 2],
            ['name' => 'Long Biên', 'parent_id' => 2],
            ['name' => 'Thanh Trì', 'parent_id' => 2],
            ['name' => 'Mê Linh', 'parent_id' => 2],
            ['name' => 'Ba Chẽ', 'parent_id' => 2],
            ['name' => 'Bạch Long Vĩ', 'parent_id' => 2],
        ]);

        
        DB::table('local')->insert([
            ['name' => 'Quận 1', 'parent_id' => 1], 
            ['name' => 'Quận 2', 'parent_id' => 1],
            ['name' => 'Quận 3', 'parent_id' => 1],
            ['name' => 'Quận 4', 'parent_id' => 1],
            ['name' => 'Quận 5', 'parent_id' => 1],
            ['name' => 'Quận 6', 'parent_id' => 1],
            ['name' => 'Quận 7', 'parent_id' => 1],
            ['name' => 'Quận 8', 'parent_id' => 1],
            ['name' => 'Quận 9', 'parent_id' => 1],
            ['name' => 'Quận 10', 'parent_id' => 1],
            ['name' => 'Quận 11', 'parent_id' => 1],
            ['name' => 'Quận 12', 'parent_id' => 1],
            ['name' => 'Bình Tân', 'parent_id' => 1],
            ['name' => 'Bình Thạnh', 'parent_id' => 1],
            ['name' => 'Gò Vấp', 'parent_id' => 1],
            ['name' => 'Phú Nhuận', 'parent_id' => 1],
            ['name' => 'Tân Bình', 'parent_id' => 1],
            ['name' => 'Tân Phú', 'parent_id' => 1],
            ['name' => 'Thủ Đức', 'parent_id' => 1],
            ['name' => 'Bình Chánh', 'parent_id' => 1],
            ['name' => 'Cần Giờ', 'parent_id' => 1],
            ['name' => 'Hóc Môn', 'parent_id' => 1],
            ['name' => 'Nhà Bè', 'parent_id' => 1]
        ]);
    }
}
