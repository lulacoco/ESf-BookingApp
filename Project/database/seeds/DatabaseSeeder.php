<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AccommodationsTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(AppartmentsTableSeeder::class);
        $this->call(BankCompaniesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
    }
}