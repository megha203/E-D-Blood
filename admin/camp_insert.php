
<?php


if(isset($_POST['btncamp']))
{
	$title = $MySQLi_CON->real_escape_string(trim($_POST['title']));
	$body = $MySQLi_CON->real_escape_string(trim($_POST['body']));
	$author = $MySQLi_CON->real_escape_string(trim($_POST['author']));
	$odate = $MySQLi_CON->real_escape_string(trim($_POST['odate']));
    $cdate = $MySQLi_CON->real_escape_string(trim($_POST['cdate']));
	
    $query = "INSERT INTO camps(title,body,author,odate,cdate) VALUES('$title','$body','$author','$odate','$cdate')";
	
    if($MySQLi_CON->query($query))
		{
			$msg1 =  "<div class='alert bg-succeed'>
					<button class='close' data-dismiss='alert'>&times;</button>
					Profile Updated Successfully!!
			  	</div>";
				header("refresh:3;account"); // redirects image view page after 5 seconds.
					
		}
        
        else
		{
			$msg1 = "<div class='alert alert-danger col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while adding this camp!
					</div>";
		}
	
}
	
?>


