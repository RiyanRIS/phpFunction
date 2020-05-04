<link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
<div class="container pt-5">
    <div class="row">
        <form action="" method="post">
            <div class="col-md-12">
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn btn-primary tambahBaris">Tambah Baris</a>&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0);" class="btn btn-danger hapusBaris">Hapus Baris</a>
                </div>
            </div>
            <div class="col-md-12 barisForm">
                <div class="form-group" id="1">
                    <label for=""></label>
                    <input type="text"
                        class="form-control" name="nama[]" placeholder="Nama Ke-1">
                </div>
            </div>
            <div class="col-md-12">
                <input name="submit" class="btn btn-primary" type="submit" value="Submit"> 
            </div>
        </form>
    </div>
</div>

<?php 
    if (isset($_POST['submit'])) {
        echo "<div class='container'>";
        echo "<hr><pre>";
        print_r($_POST['nama']);
        echo "</pre>";
        echo "<br><br>Mengambil satu data : ".$_POST['nama'][0];
        echo "</div>";
    }

?>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

<script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script 
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

<script>
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".barisForm"); //Fields wrapper
	var add_button      = $(".tambahBaris"); //Add button ID
	var del_button      = $(".hapusBaris"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        x++;
        $(wrapper).append(`<div class="form-group" id="`+x+`">
            <label for=""></label>
            <input type="text"
                class="form-control" name="nama[]" placeholder="Nama Ke-`+x+`">
        </div>`); //add input box
	});
    
    $(del_button).click(function(e){ //on add input button click
        e.preventDefault();
        $('#'+x).remove(); x--;
    });
  </script>

