<?php
class Estudiante extends Persona{
    private $numExpediente;
    public function __construct($d, $n, $e, $ne)
    {
        parent::__construct($d, $n, $e);
        $this->numExpediente = $ne;
    }
    public function Mostrar()
    {
        echo "<b>Estudiante</b><br>";
        echo "DNI: " . parent::__get("DNI") . "<br>";
        echo "Nombre: " . parent::__get("Nombre") . " <br>";
        echo "Email: " . parent::__get("Email") . " <br>";
        echo "NumExpediente: $this->numExpediente <br>";
    }
    public function __get($p){
        if ($p == 'Expediente')
            return  $this->numExpediente;
    }
    public function __set($p, $valor)
    {
        if ($p == 'Expediente')
            $this->numExpediente = $valor;
    }
}
?>