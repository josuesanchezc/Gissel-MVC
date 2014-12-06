<?php

class Usuario {
	
	private $name;
	
	
	public function getUsuario ()
	{
		
		echo "<br>Mostrar Usuario:" .$this->name;
		
		
		}
		
		
		public function setUsuario()
		{
			
		
		$this->name="Raul";
		return $this->name;
		
			
		}
		
		
		public function read_usuariog () {

      $sql1 = "select * from usuario order by id asc";
      $result1 = mysql_query($sql1) or die (mysql_error());
        echo"<div class='table table-responsive' style='margin:20px; overflow:scroll'>";
        echo"<table class='table table-striped   '>";
        echo"<tr><td colspan=17>Consulta General de Usuarios</tr>";
        echo"<tr><td>Idusuario</td></td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td><td>Calle</td><td>Numero</td><td>Colonia</td><td>Municipio</td><td>Estado</td>";
        echo"<td>Cp</td><td>Correo</td><td>Usuario</td><td>Contrasena</td><td>Nivel</td><td>estatus</td></tr>";
      while ($field =  mysql_fetch_array($result1))
      {
          $this->id = $field['id'];
          $this->nombre = $field['nombre'];
          $this->apellido_Paterno = $field['apellido_paterno'];
          $this->apellido_Materno = $field['apellido_materno'];
          $this->telefono = $field['telefono'];
          $this->calle = $field['calle'];
          $this->telefono = $field['telefono'];
          $this->numero_exterior = $field['numero_exterior'];
          $this->colonia = $field['colonia'];
          $this->municipio = $field['municipio'];
          $this->estado = $field['estado'];
          $this->cp = $field['cp'];
          $this->correo = $field['correo'];
          $this->usuario = $field['usuario'];
          $this->contrasena = $field['contrasena'];
          $this->nivel = $field['nivel'];
          $this->estatus = $field['estatus'];

          echo "<tr><td>".$this->id;
          echo "</td><td>".$this->nombre;
          echo "</td><td>".$this->apellido_Paterno;
          echo "</td><td>".$this->apellido_Materno;
          echo "</td><td>".$this->telefono;
          echo "</td><td>".$this->calle;
          echo "</td><td>".$this->telefono;
          echo "</td><td>".$this->numero_exterior;
          echo "</td><td>".$this->colonia;
          echo "</td><td>".$this->municipio;
          echo "</td><td>".$this->estado;
          echo "</td><td>".$this->cp;
          echo "</td><td>".$this->correo;
          echo "</td><td>".$this->usuario;
          echo "</td><td>".$this->contrasena;
          echo "</td><td>".$this->nivel;
          echo "</td><td>".$this->estatus;





      }
        echo"</table></div>";

    }

		
		
}
		
		
		?>