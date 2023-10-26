<?php
namespace App\Service;

class GeneradorDeMensajes {
    private const mensajes = [
        'Se guardo el nuevo usuario:',
        'Estos son todos los usuarios guardados:',
        'Esta es la informacion del usuario:',
        'Estos son los nuevos datos del usuario:',
        'Se elimino el usuario:',
        'Estos son los usuarios cuyo nombre empieza con la letra A:'
    ];

    public function getMensaje(int $idMensaje): string
    {
        return $this::mensajes[$idMensaje];
    }
}
?>