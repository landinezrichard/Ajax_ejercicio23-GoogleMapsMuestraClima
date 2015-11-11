<?php
$condicionesMetereologicas = array("lluvia", "soleado", "nublado", "tormentas", "nieve");

$puntosGeograficos = array(
  array(42.779275360241904, -2.63671875),
  array(43.24520272203359, -8.32763671875),
  array(42.22851735620852, -7.36083984375),
  array(43.35713822211053, -5.55908203125),
  array(42.114523952464246, -5.69091796875),
  array(41.541477666790286, -3.75732421875),
  array(41.22824901518529, -1.669921875),
  array(42.50450285299051, -0.50537109375),
  array(41.45919537950706, 1.34033203125),
  array(40.53050177574321, -0.3076171875),
  array(40.396764305572056, -3.6474609375),
  array(40.94671366508002, -5.73486328125),
  array(39.842286020743394, -6.2841796875),
  array(38.92522904714054, -7.03125),
  array(37.457418102629376, -6.08642578125),
  array(37.90953361677018, -4.89990234375),
  array(39.2492708462234, -4.4384765625),
  array(38.28993659801203, -3.36181640625),
  array(39.061849134291535, -1.8896484375),
  array(39.470125122358176, -0.3955078125),
  array(37.996162679728116, -0.72509765625),
  array(37.3002752813443, -1.91162109375),
  array(36.79169061907076, -4.306640625),
  array(36.19109202182454, -5.60302734375)
);

// Determinar las condiciones metereologicas de cada punto
$coordenadasGeograficas = array();
for($i=0; $i<count($puntosGeograficos); $i++) {
  $numeroAleatorio = rand(0, count($condicionesMetereologicas)-1);
  $coordenadasGeograficas[] = array(
    'latlon' => $puntosGeograficos[$i],
    'prediccion' => $condicionesMetereologicas[$numeroAleatorio]
  );
}

// Enviar la prediccion en formato JSON
/*
[
{ latlon: [42.779275360241904, -2.63671875], prediccion: "lluvia" },
...
]
*/
$codigo_json = "[ \n";
foreach($coordenadasGeograficas as $informacion) {
  $codigo_json .= "{ latlon: [" . $informacion["latlon"][0] . ", " . $informacion["latlon"][1] . "], prediccion: \"" . $informacion["prediccion"] . "\" }, \n";
}
$codigo_json .= "]";

echo $codigo_json;
?>