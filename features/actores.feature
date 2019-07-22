#language: es
Característica: Comprobar el numero de actores
	Como productor
	Yo quiero comprobar el total de actores
	Para despedir a uno de ellos

Escenario: Comprobar el total de actores
    Dado que tengo el nombre de la pelicula 'Shrek'
    Cuando busco
    Entonces deberia obtener '4'
