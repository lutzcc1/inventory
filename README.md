# inventory
Ejercicio práctico Full Stack para Transparenta

Pasos tomados

Para resolver esta prueba decidí utilizar un framework, esto por que hasta la fecha solo conozco Ruby on Rails y queria conocer que tanto puede cambiar el proceso de desarrollo de un framework a otro. Decidí utilizar Symfony por que es el que se usa en Transparenta.

Utilice la documentación oficial y tutoriales para instalar todo el ambiente de desarrollo, el cual consistió en:
- PHP 7.2.24
- Symfony 5.1.2 cómo framework
- Composer para manejo de dependencias PHP
- MySQL como motor de base de datos
- Doctrine como ORM (utilizando PDO)

Una vez instalado, volví a apoyarme en tutoriales y documentación oficial para empezar a utilizar el framework y empezar con el desarrollo. Al igual que Ruby on Rails, Symfony funciona con un modelo basado en MVC por lo que la mayoría del proceso me resultó muy familiar.

Todo el proceso de back-end fue de aprendizaje y tuve que estarme apoyando de recursos externos debido a que nunca había trabajado con Symfony. Los pasos tomados fueron los siguientes:

1. Creación de controladores utilizando MakerBundle de Symfony.
2. Creación de la vista utilizando Twig.
3. Configurar Doctrine para el manejo de la base de datos.
4. Creación de la entidad “Item”.
5. Creación de acciones para los productos.
   -Index
   -Crear. En este paso también hice la creación de la forma utilizando MakerBundle.
   -Borrar

Una vez terminados los pasos relacionados al back-end procedí a trabajar en el front-end.
Para el front-end utilice Bootstrap en su mayoría y cree algunos componentes y estilos propios. Los pasos tomados fueron:

1. Cambiar el color de fondo.
2. Darle estilo a la tabla de productos utilizando Bootstrap. También agregue un par de detalles adicionales a Bootstrap para personalizarla un poco más.
3. Poner la forma de creación de nuevos productos dentro de un modal de Bootstrap y utilizar el mismo Bootstrap para darle estilo a la forma.
4. Agregar un header a la página. El header es una combinación de Bootstrap y estilo propio.
5. Darle estilo a los botones para crear nuevos productos y borrar los existentes. Para el botón de nuevo producto utilice 100% Bootstrap, el botón de borrar es 100% estilo propio. En ambos botones utilice iconos de Font Awesome.
6. Creación de un pie de página. Para el pie de página utilice uno que ya había utilizado en un proyecto pasado y lo adapte al estilo del sitio.
7. Por último hice pequeñas correcciones y mejoras al diseño en general:
   -Cambiar la  fuente del título de la página y centrarlo.
   -Cambiar color del modal.

Una vez terminados back-end y front-end refactoricé el código para que sea más comprensible y esté mejor organizado.
