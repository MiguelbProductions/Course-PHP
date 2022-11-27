<?php  

	class Class_withconstant {

		const MAX_LIVE = 300;
		
		public function __construct()
		{
			// self::MAX_LIVE = 200;

			echo "The value is ". self::MAX_LIVE. ".";	
		}
	}

	$Class1 = new Class_withconstant;



?>