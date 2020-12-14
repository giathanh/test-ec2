<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\TestBatch;

class HomeController extends Controller {

	public function index() {
		try {
			$job = new TestBatch();
        	$sqsId = $this->dispatch($job);
        	dd($sqsId);
		} catch (\Exception $error) {
			dd($error->getMessage());
		}
       
		return view('home');
	}
	
}