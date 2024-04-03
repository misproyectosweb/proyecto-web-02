# Proyecto web 02
Sitio web que muestra y describe la información de los servicios que ofrece una iglesia

Sitio web creado con las siguientes herramientas a nivel de front-end y back-end:

- **HTML:**	Permite crear la estructura del sitio web mediante etiquetas
- **CSS:**	Para definir y crear la presentación o estética del sitio web
- **JavaScript:**	Añade características que permite agregar e implementar acciones interactivas al sitio web**
- **PHP:**	Favorece la conexión entre los servidores y la interfaz de usuario

Este sitio web fue creado y desarrollado usando la plataforma **NetBeans 12.0.** Además está adaptado para ejecutarse en dispositivos móviles.

El archivo **index.php** es el que contiene la página de inicio o página principal del sitio web, cuyo diseño varía en la mayoría de elementos contenidos en relación con el proyecto llamado **“proyecto-web-01”**

La página de inicio o principal consta de tres secciones: 
- **Un encabezado:**	donde se muestra el logotipo de la organización
- **Una sección principal:**	integra los contenidos más relevantes de presentación de la organización 
- **Un pie de página:** 	muestra la información de contacto de la organización

El menú principal consta de cuatro opciones: 
- **Quienes somos:**	muestra la información que define la identidad de la organización. Integra un submenú con seis opciones adicionales, las cuales describen aspectos tales como la visión, la misión, los valores, entre otros, de la organización
- **Reflexiones:**	página dedicada a publicar artículos, noticias, mensajes y/o reflexiones con contenido bíblico
- **Actividades:**	muestra las actividades que va a realizar la organización durante el mes en curso; así como las actividades que se van a realizar en fechas posteriores 
- **Contáctenos:**	consta de dos secciones: un formulario de contacto para que la persona pueda ponerse en contacto con la organización y un mapa que muestra la ubicación junto con datos adicionales de contacto

En cada archivo de estilos CSS se utiliza la técnica de rejilla **CSS Grid Layout** para organizar de manera más eficiente cada elemento de la interfaz del sitio web, el cual los acomoda tanto a lo largo como a lo ancho de la ventana del navegador. Además, es complementado con **Flexbox,** el cual ayuda a distribuir el espacio entre los ítems de la interfaz y mejora las capacidades de alineación de cada elemento en filas o columnas.

Para el formulario de contacto se programaron validaciones tanto del lado del cliente utilizando JavaScript; así como del lado del servidor programado con PHP.

Para enviar la información del usuario a través del formulario de contacto se utiliza una herramienta  llamada **PHPMailer.** Esta es una clase escrita con php para enviar emails basada en el componente active server ASPMail. Permite de una forma sencilla tareas complejas como por ejemplo:
- Enviar mensajes de correo con ficheros adjuntos (attachments) 
- Enviar mensajes de correo en formato HTML 
- Enviar emails via sendmail, PHP mail(), o con SMTP.

Finalmente, se utiliza una librería JavaScript llamada **SweetAlert2** para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente fueron enviados al buzón de correo del restaurante de  correcta o incorrecta.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![01  Inicio_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/317160a3-0bf4-4abf-9d90-f663a12d3469)
**==========================================================================**
![01  Inicio_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/f83383fa-dda7-4deb-a58d-65d4f6dc4f55)
**==========================================================================**
![01  Inicio_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/7498d60c-fba2-41ff-b536-f1accb6cf991)
**==========================================================================**
![02  quienessomos_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/885b044b-7850-472b-9567-ee7d36b8148f)
**==========================================================================**
![02  quienessomos_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/e1ed0ac9-a0c7-459b-bd7b-721de5686e8c)
**==========================================================================**
![02  quienessomos_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/2265239f-cfaa-4809-9d92-e6c5b2a4cf17)
**==========================================================================**
![02  quienessomos_4](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/9fdb76c1-452e-4c83-b13a-6472bfd81a25)
**==========================================================================**
![02  quienessomos_5](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/58b07bc0-74d4-4270-9603-8c2b15952601)
**==========================================================================**
![02  quienessomos_6](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/38cfcc0b-c869-4e57-9173-fdaa79ede396)
**==========================================================================**
![02  quienessomos_7](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/583c2572-cf07-4e14-8b37-d87283475103)
**==========================================================================**
![02  quienessomos_8](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/5d0809ec-6e41-4f33-9818-d9ddde489eac)
**==========================================================================**
![02  quienessomos_9](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/3631808c-5e46-4711-a742-cbfd88ea0d2c)
**==========================================================================**
![02  quienessomos_10](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/7d7da246-237d-4047-aa07-4c4bdd4d5da5)
**==========================================================================**
![02  quienessomos_11](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/eae79709-7c82-4edf-96aa-60da5d862640)
**==========================================================================**
![02  quienessomos_12](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/3a6147a6-f037-49f1-adf5-63dc22a0cdbf)
**==========================================================================**
![03  Reflexión_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/3026a181-f0ed-4e3e-9d8f-45e5d18b1641)
**==========================================================================**
![03  Reflexión_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/2d00dd82-3d6a-488d-b22c-98ace734f17d)
**==========================================================================**
![03  Reflexión_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/3759b604-46ae-4e6f-8508-b1dfe3f25c3c)
**==========================================================================**
![04  Actividades_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/9fed731f-097d-4972-bc77-ebbf82afd471)
**==========================================================================**
![04  Actividades_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/b8d12d2e-0492-49f9-a455-9cf38dbe5619)
**==========================================================================**
![04  Actividades_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/3b273373-a3d0-49ed-8e6e-00c5759ab5dc)
**==========================================================================**
![04  Actividades_4](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/1821dcda-9fb7-40be-90c1-863b3d609448)
**==========================================================================**
![05  Contacto_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/ac69e842-5692-4c02-affb-3f417936c20d)
**==========================================================================**
![05  Contacto_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/038c6b2a-5be7-49ce-8c63-69f6b1c7424a)
**==========================================================================**
![05  Contacto_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/b8db6ff0-57dd-4582-ba26-4836027ec144)
**==========================================================================**
![05  Contacto_4](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/e43ddf23-9101-48ac-86fb-f917b927fcff)
**==========================================================================**
![05  Contacto_5](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/436e050f-3824-48e8-af5e-d994b024c431)
**==========================================================================**
![05  Contacto_6](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/abcf7048-7248-4b1c-89ec-456f3752a7af)
**==========================================================================**
![05  Contacto_7](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/4db8ec32-0a96-4d05-ba74-7a5f2693b7b3)
**==========================================================================**
