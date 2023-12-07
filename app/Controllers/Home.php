<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function datosPersonales()
    {
        $persona = array(
            [
                "nombres" => "Juan",
                "apellidos" => "Perez",
                "edad" => 20,
                "hobbies" => ["futbol", "basket", "tenis"]
            ],
            [
                "nombres" => "Pedro",
                "apellidos" => "Ruiz",
                "edad" => 30,
                "hobbies" => ["natacion", "atletismo", "judo"]
            ],
            [
                "nombres" => "José",
                "apellidos" => "Fernandez",
                "edad" => 20,
                "hobbies" => ["ecuavoley", "basket", "tenis"]
            ],
            [
                "nombres" => "Luis",
                "apellidos" => "Cachimuel",
                "edad" => 20,
                "hobbies" => ["futbol", "basket", "tenis"]
            ],
            [
                "nombres" => "Estaban",
                "apellidos" => "Sarmiento",
                "edad" => 20,
                "hobbies" => ["futbol", "basket", "tenis"]
            ],
            [
                "nombres" => "Luis",
                "apellidos" => "Camargo",
                "edad" => 20,
                "hobbies" => ["futbol", "basket", "tenis"]
            ],
            [
                "nombres" => "Juan",
                "apellidos" => "Perez",
                "edad" => 20,
                "hobbies" => ["futbol", "basket", "tenis"]
            ],
            [
                "nombres" => "Fernando",
                "apellidos" => "Chimarro",
                "edad" => 20,
                "hobbies" => ["futbol", "basket", "tenis"]
            ]
        );
        return $this->response->setJSON($persona);
    }

    public function ciudades()
    {
        $ciudades = array(
            [
                "ciudad" => "Quito",
                "pais" => "Ecuador",
                "habitantes" => 2000000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Guayaquil",
                "pais" => "Ecuador",
                "habitantes" => 3000000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Cuenca",
                "pais" => "Ecuador",
                "habitantes" => 1000000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Loja",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Machala",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Portoviejo",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Manta",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Ambato",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Riobamba",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Ibarra",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ]
            
        );
        echo count($ciudades);
        return $this->response->setJSON($ciudades);
       
    }


    public function findByCiudad($ciudad)
    {
        $ciudades = array(
            [
                "ciudad" => "Quito",
                "pais" => "Ecuador",
                "habitantes" => 2000000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Guayaquil",
                "pais" => "Ecuador",
                "habitantes" => 3000000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Cuenca",
                "pais" => "Ecuador",
                "habitantes" => 1000000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Loja",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Machala",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Portoviejo",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Manta",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Ambato",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Riobamba",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ],
            [
                "ciudad" => "Ibarra",
                "pais" => "Ecuador",
                "habitantes" => 500000,
                "superficie" => 324
            ]
        );
        foreach ($ciudades as $indice => $descripcion) {
            
            if ($indice == $ciudad) {
                return $this->response->setJSON($descripcion);
                echo count($descripcion);
            }
        }
    }

    
}
