<?php

use App\Enfant;
use App\Exceptionnelle;
//equire_once(‘Enfant.php’);

class EnfantTest extends TestCase {
public function setUp(){
	parent::setUp();
	Artisan::call('migrate');
	
}
public function tearDSown(){
	
	parent::tearDSown();
	Artisan ::call('migrate:reset');
	
}
	
	
	
public function testEnfantTest () {
 	
	
	
	$enfant=enfant::create([
			
			'id'=>'100',
			'nom'=>'moumou',
			'prenom'=>'sara',
			'sexe'=>'f',
			'naissance'=>'',
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
	
	$this->assertEquals(0,Enfant::find(100)->expentionelles()->count());
	$enfant->expentionelles()->create([
			
			'id'=>'20',
			'type'=>'bus_soir',
			'jour'=>'2016-04-15',
			'inscrit'=>'',
			'enfant_id'=>'100',
			'modicate_by'=>'1'
		
			]);
	$this->assertEquals(1,Enfant::find(100)->expentionelles()->count());
	$enfant->expentionelles()->create([
				
			'id'=>'22',
			'type'=>'cantine',
			'jour'=>'2016-04-15',
			'inscrit'=>'',
			'enfant_id'=>'100',
			'modicate_by'=>'2'
		
		
	]);
	
	  $this->assertEquals(2,Enfant::find(100)->expentionelles()->count());
	  
      Exceptionnelle::destroy(22);
      
      $this->assertEquals(1,Enfant::find(100)->expentionelles()->count());
      

     
}}