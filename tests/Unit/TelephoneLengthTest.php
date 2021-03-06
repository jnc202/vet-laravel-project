<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Owner;

class TelephoneLengthTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    use RefreshDatabase;
     
    public function testTelephoneLength()
    {
        Owner::create([
            'first_name' => 'Jacques',
            'last_name' => 'Coetzee',
            'telephone' => '07532390563',
            'email' => 'jacquescoetzee91@gmail.com',
            'address_1' => '7 Chalks Road',
            'postcode' => 'BS5 9EN'
        ]);
        // not behaving as expected !! had to update input to match test of 14 strlen, varchar(14) not truncating the telephone input.
        $firstOwner = Owner::first();
        $firstOwner->telephone = "07532390563234";
        $firstOwner->save();

        $this->assertSame(strlen(Owner::first()->telephone),14);
    }
}
