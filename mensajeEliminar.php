<?php 
/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	
$idEliminar = $_POST['idEliminar'];

echo "<div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'>Eliminar Cliente</h4>
      </div>
      <div class='modal-body'>
        <form class='form-horizontal well' data-async data-target='#rating-modal' method='POST'>
            <div class='col-lg-10'>
                        <input type='hidden' class='form-control' name='idcli' id='idcli' value=".$idEliminar.">
                    </div>
            <div class='form-group'>
                    <label for='nombre' class='col-lg-2 control-label'>¿ Estas seguro(a) de eliminar este cliente ?</label>
                    
                </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button id='eliminar' onclick='EC();' type='button' class='btn-flat' data-dismiss='modal'>Si</button>
        <button type='button' class='btn-flat white' data-dismiss='modal'>No</button>        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->";
?>
