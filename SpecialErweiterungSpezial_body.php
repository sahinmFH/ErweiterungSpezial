<?php 

class SpecialErweiterungSpezial extends SpecialPage { 

        function __construct() { 
                parent::__construct( 'ErweiterungSpezial' ); 
        } 

       	function execute( $par ) {
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();

		# Get request data from, e.g.
		$param = $request->getText( 'param' );

		$output->addWikiText( '<p style="font-size: 35px;color:red;">Hallo!</p>' );

		$output->addHTML( '<form action="" method="post">' );
 		$output->addHTML( '<p>Ihr Name: <input type="text" name="name" /></p>' );
 		$output->addHTML( '<p>Ihr Alter: <input type="text" name="alter" /></p>' );
 		$output->addHTML( '<p><input type="submit" /></p>' );
		$output->addHTML( '</form>' );

		$outputName = htmlspecialchars($_POST['name']);
		$outputAlter = htmlspecialchars($_POST['alter']);

 		$output->addHTML( $outputName );
		$output->addHTML ('<p></p>');
		$output->addHTML( $outputAlter );
	
	}

 
	}


