<?php


use App\Enfant;


include ' Illuminate\Foundation\Testing\TestCase';

class dateTest extends TestCase {
	
	public function setUp(){
		parent::setUp();
		Artisan::call('migrate');
	
	}
	public function tearDSown(){
	
		parent::tearDSown();
		Artisan ::call('migrate:reset');
	
	}
	
	function  dateTest(){
		
$enfant=enfant::create([
			
		'id'=>'100',
		'nom'=>'moumou',
		'prenom'=>'sara',
		'sexe'=>'f',
		'naissance'=>'1994',
		'niveau_classe'=>'CP',
		'garderie'=>'1',
		'prendre_bus'=>'0',
		'responsable_bus'=>'alex',
		//$table->integer('arret_id')->unsigned()->index();
		'rentre_seul'=>'0',
		'mange_cantine'=>'1',
		'exception_porc'=>'0',
		'exception_viande'=>'0',
		'exception_autre'=>''
		
]);
$this->assertEquals(0,Enfant::find(100)->enfant()->count());

}}
/* $date = date("Y-m-d");
  
$this->assertTrue(starts_with($date, '1999'));
$this->assertFalse(starts_with($date, 'Tu'));
$enfant = new Enfant();

$this->assertnotequals();*/
