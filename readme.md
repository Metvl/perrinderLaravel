# Proyecto creado en Laravel 8, para la asignatura de Taller de Desarrollo Avanzado de Aplicaciones Web.

### Pre requisitos del proyecto:
- Composer
- Mysql
- git

### Clonación y configuración del proyecto:
1) Cree una carpeta donde clonar el repositorio.
2) Abrir la consola git (Git bash) dentro de la carpeta creada anteriormente.
3) En la consola de git copiar y pegar el siguiente comando [ `*git clone https://github.com/Metvl/perrinderLaravel.git*` ].
4) Una vez clonado el proyecto, acceder a su carpeta con el siguiente comando " `cd perrinderLaravel` ".
5) Abrir el IDE de su preferencia para modificar el archivo .env donde cambiaremos los siguientes parametros.
	- DB_DATABASE=perrinder	  	-> nombre de su base de datos.
	- DB_USERNAME=metal 	 		-> nombre de su usuario.
	- DB_PASSWORD=metal123		-> password personal.
6) Posteriormente realizar las respectivas migraciones con el siguente comando " php artisan migrate ".
7) Una vez realizadas las migraciones, ejecutar y levantar el proyecto con el siguiente comando " php artisan serve ".

### Rutas del proyecto:Rutas del proyecto:
##### 1) Route dogs:
1.1) Route -> `/getDogs`

1.2) Route -> `/postDog`
	- Recibe los siguientes parametros.
		"name":"Nombre del perro"
		"img":"URL de la imagen del perro"
		"description":"Descripción del perro"

1.3) Route -> /putDog/{id}
	- Recibe los siguientes parametros.
		"name":"Nombre nuevo del perro"
		"img":"URL nueva de la imagen del perro"
		"description":"Descripción nueva del perro"

1.4) Route -> `/DeleteDog{id}`

##### 2) Route Interactions:
2.1) Route -> `/getInteractions`
	- Recibe los siguientes parametros.
		"id_interested_dog":"ID del perro interesado"
		"id_candidate_dog":"ID del perro candidato"
		"preference":"Accepted,Declined"

2.2) Route -> `/getInteractionId/{id}`

2.3) Route -> `/postInteraction`

#### Datos:
- `Nombre: Francisco Ramón Ojeda Casanueva.`
- `Rut: 19.533.298-3.`
- `Carrera: Ingeniería de Ejecución en Computación e Informática.`

###### **Nota al profesor: "20/12/2022 - 22:08 - 'Sigo odiando el backend' "**