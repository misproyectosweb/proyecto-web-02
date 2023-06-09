# Proyecto web 02
Sitio web que muestra información variada de una iglesia

Este sitio web fue creado con:
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

![01  Inicio_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/a841571b-e332-4bf1-806a-4b4e31a61a84)
**==========================================================================**
![01  Inicio_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/8ea63202-6f74-4e73-a461-98a82670a04f)
**==========================================================================**
![01  Inicio_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/0c2c5490-4071-418c-8a48-70cf02873707)
**==========================================================================**
![01  Inicio_4](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/647216d9-6c9a-4499-9bef-7d98d9614546)
**==========================================================================**
![02  QS_Nuestra visión_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/6469c2fd-a4fa-4ea1-8173-18e834a9c441)
**==========================================================================**
![02  QS_Nuestra visión_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/6e49613e-9a90-4317-be20-ea967c05a8b6)
**==========================================================================**
![03  QS_Nuestra misión](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/4589e523-d857-4ae9-9d29-0888c0b27378)
**==========================================================================**
![04  QS_Nuestro perfil](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/c5264cf2-775a-4d9e-b529-5f5c1c4f5b57)
**==========================================================================**
![05  QS_Nuestra vivenciaReino](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/3b11b932-0fa6-4c6b-9570-3818cb7b8f6b)
**==========================================================================**
![06  QS_Nuestros valores](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/72bc1def-ce7f-41a2-b79b-015d2d5af2ed)
**==========================================================================**
![07  QS_Nuestra estrategia](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/282a1366-ec80-426e-81b3-6b324c9c3f46)
**==========================================================================**
![08  Reflexión_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/68a6a5c0-ba99-445c-bd77-7a4a63e0ec85)
**==========================================================================**
![08  Reflexión_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/1a5f3cef-1a1b-4b63-9157-cd46610ae1fe)
**==========================================================================**
![08  Reflexión_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/5afdc973-ff51-4b8d-89f3-b9c9f9b7a4ac)
**==========================================================================**
![09  Actividades_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/57cc3839-8954-48a3-8672-7fd851765bed)
**==========================================================================**
![09  Actividades_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/5f04af51-d187-4bef-9131-27e40bc71b95)
**==========================================================================**
![09  Actividades_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/97184d5b-ed26-4a59-988b-f3e9123d87b5)
**==========================================================================**
![10  Contacto_1](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/d28b75d9-0ec0-47cf-8cd8-3db01f313ae7)
**==========================================================================**
![10  Contacto_2](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/bbb02474-ae94-4370-bcf2-2b4cf3db6a84)
**==========================================================================**
![10  Contacto_3](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/73d8a8cd-1ee4-4e73-b3a3-b03eafb170b5)
**==========================================================================**
![10  Contacto_4](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/dc19561e-3cc1-4fa8-a587-8b546ebcd5b7)
**==========================================================================**
![10  Contacto_5](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/4372e520-e57f-4e0e-8fe7-d93a22dea092)
**==========================================================================**
![10  Contacto_6](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/fc7e9a09-971d-48ed-aca8-6d73b64c2a81)
**==========================================================================**
![10  Contacto_7](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/a1064966-a9c8-42fb-8c8b-0ef8e82ff905)
**==========================================================================**
![10  Contacto_8](https://github.com/misproyectosweb/proyecto-web-02/assets/98922137/93e49c2d-8d13-4450-92b4-392d44cf1bf7)
