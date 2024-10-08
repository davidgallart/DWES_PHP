<?php
class Persona
{

    private $dni;
    private $nombre;
    private $email;
    public function __construct($d, $n, $e)
    {
        $this->dni = $d;
        $this->nombre  = $n;
        $this->email = $e;
    }

    public function __get($p)
    {
        if ($p == 'DNI')
            return $this->dni;
        else if ($p == 'Nombre')
            return $this->nombre;
        else if ($p == 'Email')
            return $this->email;
    }
    public function __set($p, $valor)
    {
        if ($p == 'DNI')
            $this->dni = $valor;
        else if ($p == 'Nombre')
            $this->nombre = $valor;
        else if ($p == 'Email')
            $this->email = $valor;
    }
    public function Mostrar()
    {
        echo "<b>Persona</b><br>";
        echo "DNI: $this->dni <br>";
        echo "Nombre: $this->nombre <br>";
        echo "Email: $this->email <br>";
    }
}
?>