<?php

$usuario = new Usuario();

$titulo = 'bienvenido a Myusuario';
$contenido = 'contenido';
$variables =array ('titulo'=>$titulo,
				'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());
				
			view ('myUsuario',$variables);
				
