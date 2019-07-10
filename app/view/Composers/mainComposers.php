<?php
namespace App\view\Composers;
use Illuminate\View\View;
use App\Feature;

class mainComposers{

	public function compose(View $view)
	{
		$this->composeFeatures($view);
		
	}


	private function composeFeatures(View $view){

		$Features=Feature::all();
		$view->with('Features',$Features);
		

	}


}