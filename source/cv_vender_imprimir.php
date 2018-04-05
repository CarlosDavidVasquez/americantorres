<?php
  include ('constructor.php');
  include ('bd/conexion.php');
  include ('util.php');
  session_start();
  if (isset($_SESSION['username'])&&($_SESSION['type'])) {  

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">     <!-- <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome-all.min.css"> -->
    <link rel="icon" type="image/png" href="images/us.png" />
    <title>Registrar Venta | American Torres</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Side-Nav-->
        <?php
          $srt_systData = $_POST['systData'];
          $srt_clntData = $_POST['clntData'];
          $srt_artsData = $_POST['artsData'];
          $srt_totlData = $_POST['totlData'];
          $arr_systData = explode(':', $srt_systData);
          $arr_clntData = explode(':', $srt_clntData);
          $arr_artsData = explode(':', $srt_artsData);
          $arr_totlData = explode(':', $srt_totlData);
          $countArtsData = count($arr_artsData);
          $arr_artRows1D = array();
          for ($i=0; $i < $countArtsData-2 ; $i++) { 
            $arr_artRows1D[$i] = $arr_artsData[$i+1];
          }
          $countArtRows1D = count($arr_artRows1D);
          $arrArtData2D = array_1d_to_2d($arr_artRows1D, 6);
          
          $values = "";
          foreach($arrArtData2D as $count => $row){
            $idVenta = getLastSell()+1;
            $values = $values . "(" . $idVenta . ",";
            for ($i=0; $i < 6; $i++) { 
              if($i==1){
                $values = $values . "'" . $arrArtData2D[$count][$i] . "',";
              }else if($i==2||$i==4){
              }else if ($i==5) {
                $values = $values . $arrArtData2D[$count][$i];
              }else{
                $values = $values . $arrArtData2D[$count][$i] . ",";
              }
            }
            $values = $values . "),";
          }
          $valuesLength = strlen($values);
          $valuesSQL = substr($values, 0, $valuesLength-1);
          guardarVenta($arr_clntData, $arr_systData[4], $arr_systData[2], $arr_totlData);
          guardarDetalles($valuesSQL);
        ?>
        <div class="row">

        <div class="col-md-12">
          <div class="card">
            <section class="invoice">
              <div class="row">
                <div class="col-xs-12">
                  <div class="text-center"><small><span class="agregarRow">RECIBO DE PAGO</span></small></div>
                  <h2 class="page-header"><i class="fa fa-globe"></i> American Torres<small class="pull-right">Fecha: <?php echo $arr_systData[0]; ?></small></h2>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-xs-4"><i class="text-uppercase"><b>Sucursal principal:</b></i><br>
                  <strong>Barrio El Parnaso</strong>, 6 cuadras al oeste y media cuadra al norte del parque central.<br>
                  <strong>Telefono:</strong> (504) 9999-9999
                </div>
                <div class="col-xs-4" id="datosCliente" ><i class="text-uppercase"><b>Cliente:</b></i><br>
                  <span class="cliente"><strong><span id="nombreClienteTexto"><?php echo $arr_clntData[0];?></span></strong><br></span>
                  <span class="cliente"><span id="direccionClienteTexto"><?php echo $arr_clntData[1];?></span><br></span>
                  <span class="cliente"><strong>Telefono: </strong><span id="telefonoClienteTexto"><?php echo $arr_clntData[2];?></span></span>
                </div>
                <div class="col-xs-4"><b>Recibo de venta:</b> #<?php echo $arr_systData[3];?><br><br><b>Vendedor:</b> <?php echo $arr_systData[4];?><br><b>Forma de pago:</b> Contado</div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-xs-12 table-responsive" id="recibo">
                  <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th class="text-center">#</th>
                        <th class="text-center">Codigo</th>
                        <th class="text-center">Descripcion de articulo</th>
                        <th class="text-center col-xs-2">Cantidad</th>
                        <th class="text-center">Precio unitario</th>
                        <th class="text-center">Precio</th>
                      </tr>
                    </thead>
                    <tbody id="rowLista">
                    <?php
                       foreach($arrArtData2D as $row){
                          echo "<tr class='text-center'>";
                          foreach($row as $value){
                                echo "<td>".$value."</td>";
                            }
                          echo "</tr>";
                       }
                      // while ($rowArticulo=mysqli_fetch_array($queryArticulo)) {
                      //   echo '
                      //     <tr id="row'.$rowArticulo['Id_Articulo'].'" class="rowListaId text-center">
                      //     <td id="row'.$rowArticulo['Id_Articulo'].'Num">0</td>
                      //     <td id="row'.$rowArticulo['Id_Articulo'].'Id">'.$rowArticulo['Id_Articulo'].'</td>
                      //     <td class="text-left">'.$rowArticulo['Descripcion'].'</td>
                      //     <td></td>
                      //     <td id="row'.$rowArticulo['Id_Articulo'].'PrecioU">'.$rowArticulo['Precio'].'</td>
                      //     <td class="rowsPrecio" id="row'.$rowArticulo['Id_Articulo'].'Precio">0</td>
                      //     </tr>
                      //   ';
                      //   // $i++;
                      // }
                    ?>
                    </tbody>
                  </table>
                  <div class="row">
                    <div class="col-md-9 small">
                      <div class="col-xs-5 pull-left">
                        <br /><br /><br />
                        Recib&iacute; de <strong><span id="nombreClienteRecibo"><?php echo $arr_clntData[0];?></span></strong>,<br />
                        la Suma de <strong><span id="sumaTotal"><?php echo $arr_totlData[3]; ?></span></strong> Lempiras,
                        por cuenta de un total de <strong><span id="numArticulos"><?php echo $arr_artsData[0];?></span></strong> articulo(s) descritos en la tabla que arriba se muestra,
                        el d&iacute;a de hoy <br /><strong><span id="fechaRecibo"><?php echo $arr_systData[1]; ?></span></strong>.<br />
                        <br /><br /><br />
                        <div class="text-center">
                          <strong>________________________________________</strong><br />
                          <strong><i>FIRMA</i></strong>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3" >
                      <div class="pull-right">
                        <table class="table table-bordered">
                          <!-- <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead> -->
                          <tbody>
                            <tr>
                              <td><strong class="pull-right">SUBTOTAL</strong></td>
                              <td>
                              <?php echo "L. ".$arr_totlData[0];?>
                                <!-- <input class="form-control input-sm" type="text" name="Subtotal" id="Subtotal" placeholder="Subtotal" readonly> -->
                              </td>
                            </tr>
                            <tr>
                              <td><strong class="pull-right">DESC.</strong></td>
                              <td>
                              <?php 
                                if ($arr_totlData[1]=="Valor") {
                                  echo "L. ".$arr_totlData[2];
                                } else if ($arr_totlData[1]=="Porcentaje"){
                                  echo $arr_totlData[2]." %";
                                }
                              ?>
                                <!-- <div class="input-group small"> -->
                                  <!-- <span class="input-group-btn small">
                                    <select class="input-group input-sm" name="tipoDescuento" id="tipoDescuento" onclick="calcTotal()">
                                      <option value="Valor" selected>L.</option>
                                      <option value="Porcentaje">%</option>
                                    </select>
                                  </span> -->
                                  <!-- <input class="form-control input-sm" type="number" min="0" name="Descuento" id="Descuento" placeholder="Descuento" onchange="calcTotal()" onkeyup="calcTotal()" value=0> -->
                                <!-- </div> -->
                              </td>
                            </tr>
                            <tr>
                              <td><strong class="pull-right">TOTAL</strong></td>
                              <td>
                              L.
                              <?php echo $arr_totlData[3];?>
                                <!-- <input class="form-control input-sm" type="text" name="Total" id="Total" placeholder="Total" readonly> -->
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row hidden-print mt-20"> <!-- id="btn-Vender" -->
                <!-- <div class="col-xs-12 text-center" ><a class="btn btn-primary btn-lg" href="javascript:window.print();"><i class="fa fa-money"></i> VENDER</a></div> -->
              </div>
            </section>

          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modals.js"></script>
    <!-- <script src="js/tips/vender_busqueda_rapida.js"></script> -->
    <script src="js/igorescobar-jQuery-Mask-Plugin/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function (){
        function imprimir(){
          window.setTimeout('javascript:window.print();', 1500); 
          window.setTimeout('cv_vender.php', 2000); 
        }
        imprimir();
      });
    </script>
  </body>
</html>
<?php
  }else {
    header('location: page-error.php');
  }
?>