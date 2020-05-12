<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>asem</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
		<input type="file" onChange="yes()">
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		
		function yes(){
			var formData = new FormData();
			formData.append('file', $('input[type=file]')[0].files[0]);
			$.ajax({
				url: "action.php", 				// Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data:  formData,          // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(data)   // A function to be called if request succeeds
				{
					alert('sukses');
				}
				});
		}
	</script>
</body>
</html>