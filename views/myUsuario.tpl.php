



<?php

$usuario01 = new Usuario();

?>

<head></head>
<body>
<h1><?=$titulo ?> </h1>
<h1><?=$contenido ?> </h1>
<h1><?=$nombre ?> </h1>
<p>
<?php

$usuario01->setUsuario();
$usuario01->getUsuario();
$usuario01->read_usuariog ();
?>
</p>
</head>
</body>	