<?php

/**
* RavenController
* ==================================================
* This is the main controller for the frontend. All
* public logic comes trough this controller.
* 
*/

class RavenController extends BaseController {

    
    public function homepage()
    {
    	return View::make('front.homepage');
    }

}