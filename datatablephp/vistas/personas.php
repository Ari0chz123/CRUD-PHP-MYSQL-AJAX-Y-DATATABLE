<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>DATATABLES</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../librerias/datatable/dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
    <script src="../librerias/alertifyjs/alertify.js" type="text/javascript"></script>
    

    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="../librerias/datatable/dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" type="text/javascript"></script>


    <script src="../librerias/bootstrap/js/bootstrap.min.js" ></script>

    </head>
<body>
    <center><h3 style="background-color: #FB6C09;padding: 2%;color: white">CRUD AVANZADO EN PHP, MYSQL, AJAX Y DATATABLE</h3></center>
    
    <div class="container">
    <h1>Personas
    <button class='btn btn-success' data-toggle="modal" data-target="#exampleModal">Registrar</button></h1>
        <input id="txtiidpersonaelimina" hidden name="txtiidpersonaelimina">
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel"><center>Registrar Persona</center></h3>
        </div>
        <div class="modal-body">
        <form id="fregistra" enctype="multipart/form-data">
            <div>
                <div class="row">
                    <div class="col-lg-6">   
                            <label>Nombres</label><br>
                            <input class="form-control" type="text" id="txtnombres" name="txtnombres">
                    </div>
                    <div class="col-lg-6">   
                            <label>Apellidos</label><br>
                            <input class="form-control" type="text" id="txtapellidos" name="txtapellidos">
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-6">   
                            <label>Email</label><br>
                            <input class="form-control" type="email" id="txtemail" name="txtemail">
                        </div>
                        <div class="col-lg-6">   
                            <label>Direccion</label><br>
                            <input class="form-control" type="text" id="txtdireccion" name="txtdireccion">
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-6">   
                            <label>Foto</label><br>
                            <input class="form-control" type="file" name="txtfile" id="txtfile" >
                        </div>
                        <div class="col-lg-6">   
                            <label>Nacimiento</label><br>
                            <input class="form-control" type="date" id="txtnacimiento" name="txtnacimiento">
                            
                        </div>
                </div>
            </div>
        
        
        <br>
        

        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button id="btnguardar" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>



<!-- Modal Editar-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel"><center>Editar Persona</center></h3>
            </div>
            <div class="modal-body">
            <form id="fedita" enctype="multipart/form-data">
                <div>
                    <div class="row">
                        <div class="col-lg-6">   
                                <input  hidden="true" type="text" id="txtidpersonae" name="txtidpersonae">
                                <label>Nombres</label><br>
                                <input class="form-control" type="text" id="txtnombrese" name="txtnombrese">
                        </div>
                        <div class="col-lg-6">   
                                <label>Apellidos</label><br>
                                <input class="form-control" type="text" id="txtapellidose" name="txtapellidose">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6">   
                                <label>Email</label><br>
                                <input class="form-control" type="email" id="txtemaile" name="txtemaile">
                            </div>
                            <div class="col-lg-6">   
                                <label>Direccion</label><br>
                                <input class="form-control" type="text" id="txtdireccione" name="txtdireccione">
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6">   
                                <label>Foto</label><br>
                                <input class="form-control" type="file" name="txtfilee" id="txtfilee" >


                                <input hidden name="txtruta" id="txtruta">
                            </div>
                            <div class="col-lg-6">   
                                <label>Nacimiento</label><br>
                                <input class="form-control" type="date" id="txtnacimientoe" name="txtnacimientoe">
                                <br>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-6">   
                                    <br>
                                    <div id="imagennueva">
    
                                    </div>   
                                
                            </div>

                            <div class="col-lg-6">   
                                <label>Foto Actual</label><br>
                                <div id="imagenactual">

                                </div>   
                            
                            </div>
                    </div>
                </div>
            <br>
            
    
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              <button id="btneditar" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>

    <hr>
  
    <div class="table-responsive">   
    <table id="persona" class="table display table-striped table-bordered table-condensed" >
        <thead>
            <tr>								
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Foto</th>
                <th>Nacimiento</th>		
                <th>Operaciones</th>											
            </tr>
        </thead>					
    </table>
    </div>
</div>

</body>
</html>




<script>

var espa = {
			
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
            },
            "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
                    }



    var table = $("#persona").DataTable({
				
				"destroy":true,
				"ajax":{
					"method":"POST",
					"url":"../procesos/listar.php"
				},
                lengthMenu: [
                [ 5,10, 25, 50, -1 ],
                [ '5 Filas','10 Filas', '25 Filas', '50 Filas', 'Todos' ]
                ],
                dom: 'Bfrtip',
                ordering: false,
                buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'print',
                'pageLength',
                {
                extend: 'pdfHtml5',
                download: 'open'
                }
                ],
				"columns":[
					{"data":"nombres"},
					{"data":"apellidos"},
                    {"data":"email"},
					{"data":"direccion"},
                    { 
                    "render": function (data, type, JsonResultRow, meta) { 
                    return '<img width="60px" height="50px" src="'+JsonResultRow.foto+'">'; 
                        } 
                    },
                    {"data":"fecha_nacimiento"},
					{"defaultContent":"<center> <button data-toggle='modal' data-target='#exampleModal2' class='glyphicon glyphicon-pencil btn btn-primary editar'></button> <span>     </span>  <button class='eliminar glyphicon glyphicon-remove btn btn-danger'></button> </center> "}
				],
				"language":espa
                
			});
            trae_datos("#persona tbody",table);
            elimina("#persona tbody",table);

    function trae_datos (tbody,table)
	{
			$(tbody).on("click","button.editar",function(){
                $('#fedita')[0].reset();
                $('#imagenactual').empty();
                $('#imagennueva').empty();
				var data = table.row( $(this).parents("tr")).data();
				//console.log(data);
				var id = $("#txtidpersonae").val(data.idpersona),
				nombre = $('#txtnombrese').val(data.nombres),
                apellidos = $('#txtapellidose').val(data.apellidos),
                em = $('#txtemaile').val(data.email),
                dir = $('#txtdireccione').val(data.direccion),
                fo = $('#txtfilea').val(data.foto);

                $('#txtruta').val(data.foto);

                $('#txtnacimientoe').val(data.fecha_nacimiento);
                
                var image = new Image();

                src = data.foto;
                ancho = 100;
                image.src = src;
                image.width = ancho;
                $('#imagenactual').append(image);
                perm=false;
			});
	}

    function elimina (tbody,table)
	{
			$(tbody).on("click","button.eliminar",function(){
				var data = table.row( $(this).parents("tr")).data();
				//console.log(data);
				var datoo = $("#txtiidpersonaelimina").val(data.idpersona);
                alertify.confirm('Eliminar ', function(){
                $.ajax({
				type:"POST",
				data:datoo,
				url:"../procesos/eliminar.php",
				success:function(r)
				{
					if(r==1)
					{
						alertify.success('La Persona se elimino Correctamente');
                        table.ajax.reload();
					}
                    else if(r==0)
                    {
                        alertify.error('No se pudo eliminar');
                    }
					else {
                        alert(r);
					 //alertify.error('No se pudo eliminar');
                     
					}
				}
			    });

			  }, function(){ alertify.error('Se cancelo')});
			});
	}

    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#fregistra + img').remove();
            $('#fregistra').after('<img src="'+e.target.result+'" width="25%" />');
        }
        reader.readAsDataURL(input.files[0]);
    }
    }
    function filePreviewe(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            
            $('#imagennueva').empty();
            var image = new Image();
            src = e.target.result;
            image.src = src;
            ancho = 100;
            image.src = src;
            image.width = ancho;
            $('#imagennueva').append(image);
            perm=false;
            
        }
        reader.readAsDataURL(input.files[0]);
    }
    }
    
    $("#txtfile").change(function () {
    filePreview(this);
    
    });

    $("#txtfilee").change(function () {
    filePreviewe(this);
    
    });

    

    $('#btneditar').click(function(){
        var datos = new FormData(document.getElementById('fedita'));
        
        $.ajax({
            data:datos,
            type:"post",
		    dataType:"html",
		    contentType:false,
		    processData:false,
		    cache:false,
            url:"../procesos/editar.php",
            success:function(r)
            {
                if (r==1)
                {
                alertify.success("Persona Editada Correctamente");
                table.ajax.reload();
                }
                else if (r=="v"){
                    alertify.error("Debe Completar todos los datos");
                }
                else{
                    alertify.error("No se pudo Editar");
                }
                
            }
        });
        
    });


    $('#btnguardar').click(function(){
        var datos = new FormData(document.getElementById('fregistra'));
       
        $.ajax({
            data:datos,
            type:"post",
		    dataType:"html",
		    contentType:false,
		    processData:false,
		    cache:false,
            url:"../procesos/registrar.php",
            success:function(r)
            {
                if (r==1)
                {
                alertify.success("Persona Registrada Correctamente");
                $('#fregistra')[0].reset();
                $('#fregistra + img').remove();
                table.ajax.reload();
                }
                else if (r=="v"){
                    alertify.error("Debe Completar todos los datos");
                }
                else{
                    alertify.error("No se pudo Registrar");
                }
                
            }
        });
        
    });
   

$(document).ready(function(){
    $('#txtfile').val("");
})

</script>

