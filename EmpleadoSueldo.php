<?php
class EmpleadoSueldo {
    private $nombre;
    private $apellidos;
    private $sueldo;

    private static $sueldoTope = 3333;

    public function __construct($nombre, $apellidos, $sueldo = 1000) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;
    }

    // Métodos para obtener las propiedades
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getSueldo(): float {
        return $this->sueldo;
    }

    // Métodos para la variable estática
    public static function getSueldoTope(): int {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $nuevoSueldoTope): void {
        self::$sueldoTope = $nuevoSueldoTope;
    }

    // Métodos adicionales
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope;
    }
}

?>
