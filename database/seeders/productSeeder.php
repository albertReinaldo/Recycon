<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "ItemID" => "1",
            "Name" => "Glass Bottle",
            "Price" => "20000",
            "Description" => "Recycle Glass Bottle",
            "Image" => "Glass_Bottle.jpg",
            "Category" => "Recycle"
        ]);

        DB::table('products')->insert([
            "ItemID" => "2",
            "Name" => "Bottle Soap",
            "Price" => "25000",
            "Description" => "Botol Sabun Unik, produksi 2019",
            "Image" => "bottle_soap.jpg",
            "Category" => "Second"
        ]);

        DB::table('products')->insert([
            "ItemID" => "3",
            "Name" => "Toothpaste Dispenser",
            "Price" => "35000",
            "Description" => "Dispenser untuk pasta gigi untuk mempermudah menggunakan odol",
            "Image" => "dispenser_odol.jpg",
            "Category" => "Second"
        ]);

        DB::table('products')->insert([
            "ItemID" => "4",
            "Name" => "Gantungan Handphone",
            "Price" => "15000",
            "Description" => "Gantungan handphone untuk menggantung handphone saat cas",
            "Image" => "phone_holder.jpg",
            "Category" => "Second"
        ]);

        DB::table('products')->insert([
            "ItemID" => "5",
            "Name" => "Tas Daur Ulang",
            "Price" => "22000",
            "Description" => "Tas yang dibuat dengan menggunakan bungkus sabun yang tidak terpakai",
            "Image" => "Plastic_Bag.jpeg",
            "Category" => "Recycle"
        ]);

        DB::table('products')->insert([
            "ItemID" => "6",
            "Name" => "Kursi Daur Ulang",
            "Price" => "80000",
            "Description" => "Kursi daur ulang produksi 2021",
            "Image" => "recycle-chair.jpg",
            "Category" => "Recycle"
        ]);

        DB::table('products')->insert([
            "ItemID" => "7",
            "Name" => "Mainan Daur Ulang",
            "Price" => "90000",
            "Description" => "Paket mainan anak yang dibuat dengan bahan daur ulang",
            "Image" => "recycle-craft.jpeg",
            "Category" => "Recycle"
        ]);

        DB::table('products')->insert([
            "ItemID" => "8",
            "Name" => "Buku Bekas",
            "Price" => "10000",
            "Description" => "Buku impor bekas produksi 2000-2010",
            "Image" => "secondhand_books.jpg",
            "Category" => "Second"
        ]);

        DB::table('products')->insert([
            "ItemID" => "9",
            "Name" => "Box Tisu Daur Ulang",
            "Price" => "50000",
            "Description" => "Kotak tisu yang dibuat dengan bahan daur ulang",
            "Image" => "recycle-Tissue-Box.png",
            "Category" => "Recycle"
        ]);

        DB::table('products')->insert([
            "ItemID" => "10",
            "Name" => "Kursi Kayu",
            "Price" => "60000",
            "Description" => "Kursi kayu berkualitas",
            "Image" => "wood_chair.jpg",
            "Category" => "Second"
        ]);
    }
}
