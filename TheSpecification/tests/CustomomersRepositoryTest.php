<?php

use Illuminate\Database\Capsule\Manager as DB;
class CustomerRepostoryTest extends PHPUnit\Framework\TestCase {

    protected $customers;

    public function setUp(){

       
        $this->setUpDatabase();
        $this->migrateTables();

        Customer::create(['name' => 'Alex', 'type' => 'gold']);
        Customer::create(['name' => 'Ivan', 'type' => 'silver']);
        Customer::create(['name' => 'Anna', 'type' => 'bronse']);
        Customer::create(['name' => 'Max', 'type' => 'gold']);
        $this->customers = new CustomerRepository;

    }

    protected function setUpDatabase() {
        $database = new DB;
        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);
        $database->bootEloquent();
        $database->setAsGlobal();
    }

    protected function migrateTables() {

        DB::schema()->create('customers', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });
    }

    function testFetchAllCustomers() {

        $results = $this->customers->all();
        $this->assertCount(4, $results);

    }
    
    function testFtchesAllCustomersWhoMatchGivenSpecification() {

        $specification = new CustomerIsGold;

        $results = $this->customers->whoMatch($specification);
        $this->assertCount(2, $results);

    }
}
