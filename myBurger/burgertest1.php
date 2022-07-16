<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Pulled from http://www.avtex.com/blog/2015/01/27/drag-and-drop-sorting-of-table-rows-in-priority-order/ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Steven Ray: Drag and drop sorting of table rows</title>

<link href="../demo.css" type="text/css" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<!-- jQuery UI CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
    //Helper function to keep table row from collapsing when being sorted
	var fixHelperModified = function(e, tr) {
		var $originals = tr.children();
		var $helper = tr.clone();
		$helper.children().each(function(index)
		{
		  $(this).width($originals.eq(index).width())
		});
		return $helper;
	};

	//Make diagnosis table sortable
	$("#diagnosis_list tbody").sortable({
    	helper: fixHelperModified,
		stop: function(event,ui) {renumber_table('#diagnosis_list')}
	}).disableSelection();


	//Delete button in table rows
	$('table').on('click','.btn-delete',function() {
		tableID = '#' + $(this).closest('table').attr('id');
		r = confirm('Delete this item?');
		if(r) {
			$(this).closest('tr').remove();
			renumber_table(tableID);
			}
	});

});

//Renumber table rows
function renumber_table(tableID) {
	$(tableID + " tr").each(function() {
		count = $(this).parent().children().index($(this)) + 1;
		$(this).find('.priority').html(count);
	});
}


</script>

<style type="text/css">
.ui-sortable tr {
	cursor:pointer;
}
		
.ui-sortable tr:hover {
	background:rgba(244,251,17,0.45);
}

</style>

</head>

<body>

<div id="content" class="container">

<h1>Sortable table</h1>

            <table class="table" id="diagnosis_list">
                <thead>
                    <tr><th>Id</th><th>Burger Name</th><th>Burger Size</th><th>Price</th><th> </th></tr>
                </thead>
                <tbody>
					<div class="col-md-3">   ID </div>
				<div class="col-md-3">  Burger Name </div>
				<div class="col-md-3">  Size </div>
				<div class="col-md-3">  Price </div>
                </tbody>
            </table>
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM burger";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) != 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[2] ?> </div>
				<div class="col-md-3">  <?php echo $row[3] ?> </div>
			</div>
			
			<?php 
				}					
			}
			?>

</div>

</body>
</html>
