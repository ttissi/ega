
<head>
    
    <meta http-equiv="Content-Type" content="Type=text/html; charset=utf-8">
   <style>
        p.result {
          margin: 0px;
          padding: 0px;
        }
        fieldset {
          width: 45%;
          margin: 15px 0px 25px 0px;
          padding: 15px;
        }     
        fieldset.left {
          float: left;
          clear: left;
        }     
        fieldset.right {
          float: right;
          clear: right;
        }     
        legend {
          font-weight: bold;
        }
        .button {
          text-align: right;
        }
        .button input {
          font-weight: bold;
        }
        #dnd_drag {
          display: none;
          text-align: center;
          padding: 1em 0;
          margin: 1em 0;
          color: #555;
          border: 2px dashed #888;
          border-radius: 7px;
          cursor: default;
        }
        #dnd_drag.hover {
          border: 2px dashed #000;
        }
        #xhr_status, #dnd_status {
          font-size: 90%;
          font-style: italic;
        }
        .thumb-image{float:left;width:100px;position:relative;padding:5px;}
    </style>

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	<h1>Création d'une annonce </h1>
	
<form method="post" action="" id="formInscription">
	
		<legend>Espace de vente pour votre matériel de golf</legend>
		<fieldset>
					
				
			<input type="text" name="" value="" id="" placeholder="Désignation Article">

				<select class="form-control" >
					<option><label disabled>Etat</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<select class="form-control" >
					<option><label disabled>Catégorie</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<select class="form-control" >
					<option ><label disabled>Dextérité</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<select class="form-control" >
					<option ><label disabled>Sexe</label></option>
					<option value="un">Un</option>
					<option value="deux">Deux</option>
					<option value="trois">Trois</option>
				</select>

				<input type="number" placeholder="Prix"></input>

				<label>Description</label>
				<textarea placeholder="Description de votre matériel => limitez-vous à 5 lignes maximum SVP"></textarea>
		</fieldset>
	
</form>

    <fieldset class="left">
        <legend>Multiple upload</legend>
        
        <form name="my_form" enctype="multipart/form-data" method="post" action="upload.php">
            <p><input id="fileUpload" type="file" size="64" name="my_field[]" value="" /></p>
            <p><input id="fileUpload2" type="file" size="64" name="my_field[]" value="" /></p>
            <p><input id="fileUpload3" type="file" size="64" name="my_field[]" value="" /></p>
            <p class="button"><input type="hidden" name="action" value="multiple" />
            <input type="submit" name="Submit" value="upload" /></p>
        </form>
        <div id="wrapper" style="margin-top: 20px;">

      <div id="image-holder"></div>
      <div id="image-holder2"></div>
      <div id="image-holder3"></div>
    </div>
    </fieldset>
    <script>
$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
$(document).ready(function() {
        $("#fileUpload2").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder2 = $("#image-holder2");
          image_holder2.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder2);
                }
                image_holder2.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
$(document).ready(function() {
        $("#fileUpload3").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder3 = $("#image-holder3");
          image_holder3.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder3);
                }
                image_holder3.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>


			


</body>

</html>

