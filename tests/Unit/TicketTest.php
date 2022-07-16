<?php

namespace Tests\Unit;
//use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use Tests\TestCase;
use App\Models\Ticket;

class TicketTest extends TestCase
{
    
    //use RefreshDatabase;
    use DatabaseTransactions;

    protected function getTestData()
    {
        return [
            [0, true],
            [1, false],
        ];

    }
    
/**
 * @dataProvider getTestData
 * 
 */


    public function testIsNew($status, $expectedResult)
    {
        $ticket = Ticket::factory()->create([
            'status' => $status,
       ]);
       $this->assertEquals($expectedResult, $ticket->isNew());
    }

    

}
