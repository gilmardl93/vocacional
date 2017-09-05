<?php

use Illuminate\Database\Seeder;
use App\Models\Facultad;

class FacultadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'ARQUITECTURA, URBANISMO Y ARTES', 'sigla' => 'FAUA']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA CIVIL', 'sigla' => 'FIC']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA ECONÓMICA Y CIENCIAS SOCIALES', 'sigla' => 'FIECS']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA GEOLÓGICA, MINERA Y METALÚRGICA', 'sigla' => 'FIGMN']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA INDUSTRIAL Y DE SISTEMAS', 'sigla' => 'FIIS']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA ELÉCTRICA Y ELECTRÓNICA', 'sigla' => 'FIEE']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA MECÁNICA', 'sigla' => 'FIM']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'CIENCIAS', 'sigla' => 'FC']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA DE PETRÓLEO, GAS NATURAL Y PETROQUÍMICA', 'sigla' => 'FIP']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA QUÍMICA Y TEXTIL', 'sigla' => 'FIQT']);
        Facultad::create(['fecha' => '0000-00-00', 'nombre' => 'INGENIERÍA AMBIENTAL', 'sigla' => 'FIA']);
    }
}
