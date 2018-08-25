<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\http\Requests;

class ServiciosAdicionales extends Controller
{
//mes actual en letras
public function getMes(){
$mesActual = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
return $mesActual[date('n')-1];
} //fin funcion getMes

//notaria de turno para el mes actual
public function getTurno(){
  $mes = (string)date('n');
	  				 if ($mes == "1" || $mes == "5" || $mes == "9")
                    {
                  $notario = "<B>Notario:</B>  Luis Eduardo Solar Bach <br><B>Dirección:</B>  Lautaro Nº 325 Local 4 y 5, Los Angeles <br><B>Telefono:</B>  43-252 4149";
                  return $notario;
                    }
                  if ($mes == "2" || $mes == "6" || $mes == "10")
                    {
                   $notario = '<B>Notario:</B>   Sergio Hernández Reeve <br><B>Dirección:</B>  Lautaro N° 371, Los Angeles<br><B>Telefono:</B>  43-231 1318';
                   return $notario;
               		   }
                  if ($mes == "3" || $mes == "7" || $mes == "11")
                  	{
                   $notario = '<B>Notario:</B>   Mª Antonieta Carrillo F.<br><B>Dirección:</B>  Lautaro N° 371, Los Angeles<br><B>Telefono:</B>  43-263 0857';    
                   return $notario;
                   	}
                  if ($mes == "4" || $mes == "8" || $mes == "12")
                  	{	
                   $notario = '<B>Notario:</B>   Juan Mauricio Araneda Medina<br><B>Dirección:</B>  Caupolicán N° 355, Los Angeles<br><B>Telefono:</B>  43-221 5151';
                   return $notario;
               			}
}//fin Function getTurno

//Funcion getPrivilegio el cual establese el la notaria de turno privilegio de pobreza
public function getPrivilegio(){
  $mes = (string)date('n');
             if ($mes == "4" || $mes == "8" || $mes == "12")
                    {
                  $notariaPrivilegio = "<B>Notario:</B>  Luis Eduardo Solar Bach <br><B>Dirección:</B>  Lautaro Nº 325 Local 4 y 5, Los Angeles <br><B>Telefono:</B>  43-252 4149";
                  return $notariaPrivilegio;
                    }
                  if ($mes == "1" || $mes == "5" || $mes == "9")
                    {
                   $notariaPrivilegio = '<B>Notario:</B>   Sergio Hernández Reeve <br><B>Dirección:</B>  Lautaro N° 371, Los Angeles<br><B>Telefono:</B>  43-231 1318';
                   return $notariaPrivilegio;
                     }
                  if ($mes == "2" || $mes == "6" || $mes == "10")
                    {
                   $notariaPrivilegio = '<B>Notario:</B>   Mª Antonieta Carrillo F.<br><B>Dirección:</B>  Lautaro N° 371, Los Angeles<br><B>Telefono:</B>  43-263 0857';    
                   return $notariaPrivilegio;
                    }
                  if ($mes == "3" || $mes == "7" || $mes == "11")
                    { 
                   $notariaPrivilegio = '<B>Notario:</B>   Juan Mauricio Araneda Medina<br><B>Dirección:</B>  Caupolicán N° 355, Los Angeles<br><B>Telefono:</B>  43-221 5151';
                   return $notariaPrivilegio;
                    }
}//fin Function getPrivilegio

public function getDevuelta(){
$datos;
$datos['mesActual'] = $this->getMes();
$datos['NotarioTurno'] = $this->getTurno();
$datos['notariaPrivilegio'] = $this->getPrivilegio();
return view('publico.welcome',$datos);
}

}//controller
