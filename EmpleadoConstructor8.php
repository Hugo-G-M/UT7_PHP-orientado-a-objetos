<?php
class EmpleadoConstructor8 {
    public function __construct(
        private string $nombre,
        private string $apellidos,
        private float $sueldo = 1000
    ) {}

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

    // Métodos adicionales
    public function getNombreCompleto(): string {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }
}

?>
