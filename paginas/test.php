<?php 
	$asd = mysqli_connect("localhost","adminGamer","123123");
	mysqli_select_db( $asd, "gamingtorrents");
	mysqli_query( $asd, "Insert into usuaris (email, pass, authid) values ('assssd@asd.com' , '123123', '12312312312312' )") or die(mysqli_error($asd));
		
	?>