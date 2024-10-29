<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete();
            // $table->foreignIdFor(Book::class)->constrained()->cascadeOnDelete();
            // $table->string('delivery_address');
            // $table->enum('status', ['sent', 'odered', 'paid']);
            // $table->date('order_date');
            'delivery_address'=> $this->faker->address,
            'status'=>$this->faker->randomElement(['sent', 'odered', 'paid']),
            'order_date'=>$this->faker->date(),
            'client_id' => Client::factory(),
            'book_id' => Book::factory(),
        ];
    }
}
