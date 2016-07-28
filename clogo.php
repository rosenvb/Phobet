<?php
	session_start();
	if ($_SESSION['permiso']==2) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Configuración de logotipo</title>
    <?php include 'st.php'; ?>
	


	<style>
		.icoPrevia{
			max-width: 160px;
			max-height: 160px;
			min-width: 160px;
			min-height: 160px;
			width: 160px;
			height: 160px;
			border-right: solid;
			border-width: 1px;
			border-color: rgba(0,0,0,0.1);
		}
		.icoPrevia:hover{
			opacity: 0.9;
		}

		.sload{
			width: 200px;
		}
		
		.txv{
			font-family: sans-serif;
			font-size: 10px;
			color: #989898;
			margin-left: 30px;
		}

		.txv1{
			font-family: sans-serif;
			font-size: 15px;
			color: #989898;
			margin-left: 3px;
		}
		.vr{
			color:rgb(92, 184, 92);
		}
		.hLin{
			line-height: 2px !important;
		}

	</style>
</head>
<body>
	<?php include 'headPag.php'; 
			
	?>
	<div class="row-fluid">
		<hr>
		<div class="col-md-1"></div>
		<div class="col-md-10 text-center"><br>
			<div class="col-md-2">
				<img class="icoPrevia" data-toggle="tooltip" title="Icono actual <?php echo $_SESSION['usuario']; ?>" data-placement="top" id="ico1" src=<?php echo '"'.$_SESSION['logo'].'"'; ?> alt=""><br>
				<span class="txv ">Icono Actual</span>
			</div>
			<div class="col-md-10 text-left">
				<br class="hLin">
					<form  id="formulario" method="post" enctype="multipart/form-data">
                        	<i class="fa fa-2x fa-cloud-upload vr" aria-hidden="true"></i> <span class="vr">Cargar nuevo</span> 
                            <input type="file" name="file" class="fil3 col-md-2" />
                        
                    </form>
						
                    <div id="load" class="">
                            Subiendo logo...<br>
                            <img class="sload" src="img/loader.gif">
                        </div>


					</a>
					<hr>
					<span class="txv1 ">Fecha de modificación: </span><br><?php echo "<i class='fa fa-2x fa-calendar-check-o' aria-hidden='true'></i><span id='fec' class=''>".$_SESSION['fechaMod']."</span> "; ?>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
		 <script type="text/javascript">

                     $(document).ready(function(){
                        var ot = document.getElementById('load');
                        $(ot).hide();

                        //ocultar panel de rotacion
                        var panelRotacion = document.getElementById('phRotacion');
                        $(panelRotacion).hide();

                    });

                    $(function () {
                        $("input[name='file']").on("change",function() {

                            var f = document.getElementById('load');
                            $(f).fadeIn(); 

                            var formData =  new FormData($("#formulario")[0]);
                            var ruta = "./uploaderLogo.php";
                            

                            $.ajax({
                                url: ruta,
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                
                                success: function(datos){
                                    $("#respuesta").html(datos);    
                                    var f = document.getElementById('load');
                                    $(f).fadeOut(); 
                                    cf();
                                    cargarImg(datos);
                                    

                                }
                            });
                        });
                    });


				function cargarImg (ruta) {
					document.getElementById('ico1').src= ruta ;
				}

				function cf () {
					document.getElementById('fec').innerHTML= "<?php echo $_SESSION['fechaMod']; ?> ";
				}
                </script>
                <!--Termina Subida-->
	
	<div class="row-fluid">
		<hr>
		<?php include 'panSal.php'; ?>
	</div>

</body>
</html>

<?php 
        
        }else{
            include("login.php");
        }
 ?>