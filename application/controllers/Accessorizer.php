<?php

class Accessorizer extends Application
{

	/**
	 * Index page.
	 */
	public function index()
	{
		$this->data['pagebody'] = 'accessorizer';
		$this->render();
	}

}
