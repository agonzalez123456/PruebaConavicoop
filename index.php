<?php 
  	$dbhost="172.30.1.210";	
	$dbusername='sa';	
	$dbuserpass='lip0'; 	
	$dbname='conavicoop';
	$db= mssql_connect ($dbhost, $dbusername, $dbuserpass);
    mssql_select_db($dbname);	
  	//	$qry="SET ANSI_NULLS, QUOTED_IDENTIFIER, CONCAT_NULL_YIELDS_NULL, ANSI_WARNINGS, ANSI_PADDING ON";
	//	$result = mssql_query($qry, $db);// or die(mssql_error());			
		
		
		
 		$qry = "getAll_datosAgente2 '01', '201507'";
 		$result = mssql_query($qry, $db);// or die(mssql_error());			
		while($row = mssql_fetch_array($result)){
			echo $row[1].'<br>';
			
		}

		
		
?>
