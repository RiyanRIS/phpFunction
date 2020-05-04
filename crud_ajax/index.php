<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CURD SEDERHANA</title>
	<link rel="stylesheet" href="">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<h1>CRUD AJAX NO RELOAD</h1>
	<input type="text" name="nama" id="nama"><br>
	<input type="text" name="umur" id="umur"><br>
	<input type="submit" id="simpan" value="Simpan"><br><br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Umur</th>
			<th>aksi</th>
		</tr>
		<tbody id="tabel">
			
		</tbody>
	</table>
	<script>
		$( document ).ready(function() {
			var aezakmi;
			refresh();
			// console.log('aaa');
			function refresh(){
				$("#nama").val("");
      	$("#umur").val("");
	  		$("#simpan").val("Simpan");

				$.ajax({
            type : "POST",
            url   : 'proses.php?k=show',
            async : false,
            dataType : 'json',
            success : function(data){
            	var html = '';
              for(var i=0; i<data.length; i++){
              	html += '<tr>';
              	html += '<td>'+(i+1)+'</td>';
              	html += '<td data="'+data[i].nama+'">'+data[i].nama+'</td>';
              	html += '<td data="'+data[i].umur+'">'+data[i].umur+'</td>';
              	html += '<td><a href="#" data="'+data[i].nama+'" val="'+data[i].umur+'" class="edit">edit</a>||<a data="'+data[i].nama+'" href="#" class="hapus">hapus</a></td>';
              	html += '</tr>';
            	}
            	$('#tabel').html(html);
        		}
				});
			}
	    
	    $("#simpan").on('click',function(){
	    	var aksi = $("#simpan").val();
	    	var nama = $("#nama").val();
		    var umur = $("#umur").val();
	    	if(aksi == "Simpan"){
		    	$.ajax({
	            type : "POST",
	            url   : 'proses.php?k=insert',
	            async : false,
	            data : {nama:nama,umur:umur},
	            dataType : 'json',
	            success : function(data){
	            	refresh();
	            }
	        });
		    }else{
		    	$.ajax({
	            type : "POST",
	            url   : 'proses.php?k=update',
	            async : false,
	            data : {nama:nama,umur:umur,kode:aezakmi},
	            dataType : 'json',
	            success : function(data){
	            	refresh();
	            }
	        });
		    }
	    });

	  $("#tabel").on('click','.edit',function(){
	  	var nama = $(this).attr('data');
	  	aezakmi = nama;
	  	var umur = $(this).attr('val');
	  	$("#nama").val(nama);
	  	$("#umur").val(umur);
	  	$("#simpan").val("Ubah");
		});

	  $("#tabel").on('click','.hapus',function(){
	  	var kode = $(this).attr('data');
	  	$.ajax({
          type : "POST",
          url   : 'proses.php?k=delete',
          async : false,
          data : {kode:kode},
          dataType : 'json',
          success : function(data){
          	refresh();
          }
      });
		});
	});
		
	</script>
</body>
</html>