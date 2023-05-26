<html>
	<head>
		<title>Add - Category</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>	
        <link rel="stylesheet" href="assets/stylee.css">
        <script src="assets/script.js"></script>
	</head>
    <body>        
        <div class="container">		
            <form id="form-validation" method="POST" action="prosestambahc.php" ><br>
                                    
                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Id Category&emsp;&emsp;&emsp;</span>
                    </div>
                    <input type="text" name="id_category" class="form-control" disabled>
                </div>

                <div class="input-group mb-3 input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Name Category &emsp;</span>
                    </div>
                    <input type="text" name="name_category" class="form-control">
                </div>
            
                <button type="submit" name ="simpan" value="simpan" button type ="button" class="btn btn-primary">SIMPAN</button>
                <button type="reset" name ="reset" value="Reset" button type ="button" class="btn btn-danger">RESET</button>
                <a href="indexcategory.php" class="btn btn-dark">Back to Home</a>
            </form> 
        </div>
    </body>	

</html>