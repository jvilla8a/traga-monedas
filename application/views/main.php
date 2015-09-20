<?php session_start();
  if(isset($_GET['empezar'])){
  unset($_SESSION['puntaje']);
  session_destroy();
  $response = "";
  }else{ 
  $count = 1;
  $count2 = 1;

  foreach (scandir("images") as $key => $value):
    if($value != "." && $value != ".."): 
      $count++;
    endif;
  endforeach;

  $numRand1=rand(1,($count-1));
  $numRand2=rand(1,($count-1));
  $numRand3=rand(1,($count-1));

  foreach (scandir('images') as $key => $value):
    if($value != "." && $value != ".."):
      if ($count2 == $numRand1) {$image1 = $value;};
      if ($count2 == $numRand2) {$image2 = $value;};
      if ($count2 == $numRand3) {$image3 = $value;};
      $count2++;
    endif;
  endforeach;

  $x = $image1;
  $y = $image2;
  $z = $image3;
  $gameover = false;

  if(!isset($_SESSION['puntaje'])){ $_SESSION['puntaje'] = 50; }
    if($x==$y && $y==$z){
      $_SESSION['puntaje'] = $_SESSION['puntaje'] + 10;
      $mensaje= "<div id='win' style='background-color: green; color: #FFFF; text-align: center; font-family: Tahoma; font-size: 14px; padding-top: 0px; padding-bottom: 3px;'><b>Ganaste</b><br> GANASTE 10 PUNTOS </div>";
    }
      else if ($x==$y || $x==$z || $y==$z){
        $_SESSION['puntaje'] = $_SESSION['puntaje'] + 5;
        $mensaje= "<div id='casi' style='background-color: yellow; color: #FFFF; text-align: center; font-family: Tahoma; font-size: 14px; padding-top: 0px; padding-bottom: 3px;'><b>No esta mal</b><br> Ganaste 5 puntos</div>";
      }
        else{
          $_SESSION['puntaje'] = $_SESSION['puntaje'] -5;
          $mensaje ="<div id='mal' style='background-color: red; color: #FFFF; text-align: center; font-family: Tahoma; font-size: 14px; padding-top: 0px; padding-bottom: 3px;'><b>Sigue Jugando</b><br>Solo perdiste 5 puntos</div>";
        }
  if(isset($_SESSION['puntaje']) && $_SESSION['puntaje'] <= 0){ $gameover = true; }
    
$response = array(
  'ruleta' => 
  '<table align="center">
  <tr>
    <td>
      <div id="imagen-x" align="center"> 
        <img src="images/'.$x.'" width="128" height="128" style="padding: 5px;"/>
      </div>
    </td>
    <td>
      <div id="imagen-y" align="center"> 
        <img src="images/'.$y.'" width="128" height="128" style="padding: 5px;"/>
      </div>
    </td>
    <td>
      <div id="imagen-z" align="center"> 
        <img src="images/'.$z.'" width="128" height="128" style="padding: 5px;"/>
      </div>
    </td>
  </tr>
</table>',
'mensaje' => $mensaje,
'puntaje' => $_SESSION['puntaje'],
'gameover' => $gameover);
}
echo json_encode($response);

?>