<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		/* Standard Libraries */
		$this->load->database();
		$this->load->library('grocery_CRUD');    
	}

	public function render($type){
		$crud = new grocery_CRUD();
		// $this->grocery_crud->set_theme('twitter-bootstrap');
		switch ($type) {
			case 'association':
				break;
			case 'club':
				$this->grocery_crud->set_relation('AssociationId', 'association', 'AssociationName');
				break;
			case 'team':
				$this->grocery_crud->set_relation('ClubId', 'club', 'ClubId');
				break;
			case 'fixture':
				$this->grocery_crud->set_relation('CourtId', 'court', 'CourtName');
				$this->grocery_crud->set_relation('TeamAId', 'team', 'TeamName');
				$this->grocery_crud->set_relation('TeamBId', 'team', 'TeamName');
				$this->grocery_crud->set_relation('HomeTeam', 'team', 'TeamName');
				$this->grocery_crud->set_relation('CompetitionId', 'competition', 'CompetitionId');
				
				break;	
			case 'venue':
				break;	
			case 'court':
				$this->grocery_crud->set_relation('VenueId', 'venue', 'VenueName');
				$this->grocery_crud->set_relation('SportPlayed', 'sportcode', 'SportName');
				break;	
			case 'association_venue':
				break;	
			case 'coach_team':
				break;		
			case 'fixture_statistics':
				$this->grocery_crud->set_relation('FixtureId', 'fixture', 'FixtureId');
				$this->grocery_crud->set_relation('ResultId', 'result', 'ResultId');
			
				break;	
			case 'player_statistics':
				break;	
			case 'competition':
				break;	
			case 'competition_team':
				break;			
			default:
				# code...
				break;
		}
		
		$this->grocery_crud->set_table($type);
		$output = $this->grocery_crud->render();
		
		$this->load->view('crud', $output);    
	}

	function api($request) {
		if ($this->input->post()){
			var_dump($this->input->post());
		}
	}

}
