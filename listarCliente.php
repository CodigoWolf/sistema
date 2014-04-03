<?php 
	sleep(1);
	include_once('conexion.php');
	$sql = "SELECT * FROM cliente WHERE estado = 1;";
	$res = mysql_query($sql);
	$ide = "";
	echo "<div id='pad-wrapper' class='datatables-page' style='margin-top:0px;'>";            
	echo "           <div class='row'>";
	echo "               <div class='col-md-8'>";
	echo "                    <table id='example' class='table table-hover'>";
	echo "                        <thead>";
	echo "                            <tr>";
	echo "                                <th style = 'display:none;' tabindex='0' rowspan='1' colspan='1'>ID</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Nombre</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Apellidos</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>DNI</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Dirección</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'>Edad</th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'></th>";
	echo "                                <th tabindex='0' rowspan='1' colspan='1'></th>";
	echo "                            </tr>";
	echo "                        </thead>";
	echo "                        <tbody>";
			while ($clientes = mysql_fetch_array($res)) {
	echo "                            <tr>";
	echo "                                <td style = 'display:none;'>$clientes[0]</td>";
	echo "                                <td>".$clientes[1]."</td>";
	echo "                                <td>".$clientes[2].' '.$clientes[3]."</td>";
	echo "                                <td>$clientes[6]</td>";
	echo "                                <td class='center'>$clientes[5]</td>";
	echo "                                <td class='center'>$clientes[4]</td>";
	echo "                                <td class='center'><a onclick='LDE(".$ide=$clientes[0].");' data-toggle='modal' data-target='#myModal-Edit' style='cursor:pointer;'><i class='icon-edit'></i></a></td>";
	echo "                                <td class='center'><a onclick='ME(".$ide=$clientes[0].");' data-toggle='modal' data-target='#myModal-Delete' style='cursor:pointer;'><i class='icon-remove'></i></a></td>";
	echo "                            </tr>";
			}
	echo "                        </tbody>";
	echo "                    </table>";
	echo "                </div>";
	echo "            </div>";
	echo "        </div>";

	/*PARTE DE EDITAR Y ELIMINAR CLIENTE*/
	echo "
	<!-- Modal para Editar-->
	<div class='modal fade' id='myModal-Edit' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
	  
	</div><!-- /.modal -->";

	echo "
	<!-- Modal para Eliminar-->
	<div class='modal fade' id='myModal-Delete' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
	  
	</div><!-- /.modal -->";

	echo " <script type='text/javascript'>
			$(document).ready(function() {
				$('#example').dataTable({
					'sPaginationType': 'full_numbers',
					'oLanguage':{
						'sProcessing':     'Cargando...',
						'sLengthMenu':     'Mostrar _MENU_ registros',
						'sZeroRecords':    'No se encontraron resultados',
						'sEmptyTable':     'Ningún dato disponible en esta tabla',
						'sInfo':           'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
						'sInfoEmpty':      'Mostrando registros del 0 al 0 de un total de 0 registros',
						'sInfoFiltered':   '(filtrado de un total de _MAX_ registros)',
						'sInfoPostFix':    '',
						'sSearch':         'Buscar:',
						'sUrl':            '',
						'sInfoThousands':  '',
						'sLoadingRecords': 'Cargando...',
						'oPaginate': {
							'sFirst':    'Primero',
							'sLast':     'Último',
							'sNext':     'Siguiente',
							'sPrevious': 'Anterior'
						},
						'oAria': {
							'sSortAscending':  ': Activar para ordenar la columna de manera ascendente',
							'sSortDescending': ': Activar para ordenar la columna de manera descendente'
						}
					},
					'aaSorting': [[ 0, 'desc' ]],//ordenar
					'iDisplayLength': 5,
					'aLengthMenu': [[5, 10, 20, -1], [5, 10, 20, 'All']]
				});
			});			
			</script>";
 ?>