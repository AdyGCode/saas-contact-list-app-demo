<?php

namespace Database\Seeders;

use App\Models\DemoOrder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DemoOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedOrders = [
            [
                'id' => '1',
                'customer' => 'Fred Bloggs',
                'date' => Carbon::now()->subDays(30),
                'status' => 'overdue',
                'status_color' => 'red',
                'amount' => '1234',
            ],

            [
                'id' => '3',
                'customer' => 'Dee Saster',
                'date' => Carbon::now()->subDays(21),
                'status' => 'waiting',
                'status_color' => 'yellow',
                'amount' => '346',
            ],

            [
                'id' => '4',
                'customer' => 'Crystal Chantel-Lear',
                'date' => Carbon::now()->subDays(20),
                'status' => 'delivered',
                'status_color' => 'blue',
                'amount' => '23',
            ],

            [
                'id' => '5',
                'customer' => 'Gu Ng Ho',
                'date' => Carbon::now()->subDays(14),
                'status' => 'delivered',
                'status_color' => 'blue',
                'amount' => '7857',
            ],

            [
                'id' => '7',
                'customer' => 'Crystal Chantel-Lear',
                'date' => Carbon::now()->subDays(7),
                'status' => 'in-transit',
                'status_color' => 'purple',
                'amount' => '14',
            ],

        ];

        foreach ($seedOrders as $order) {
            DemoOrder::create($order);
        }
    }
}
