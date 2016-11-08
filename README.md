# KupeLike

Proyecto de 2º curso de Desarrollo Web

### Participantes

- Jon Auzmendi
- Odei Alba
- Naiara Padules
- Eder Ferreira

##### Estructura de la aplicación

```
kupelike
    |
    |_config
        |_ "Archivos de configuración de la aplicación"
    |
    |_public
        |_css
        |_img
        |_js
            |_json
        |_uploads
            |_kupelak
            |_sagardotegiak
        |_vendor
    |
    |_src
        |_controlador
        |_modelo
        |_vista
            |_kupela
            |_sagardotegi
    |
    |_templates
```

## /config

| Archivo        | Descripción
| ------------- |:-------------:|
| config.json      | Datos de acceso a la base de datos |
| DBConnection.class.php      | Controladora de la BD      |
| routes.php | Contiene las rutas de la aplicación. Utiliza **SlimPHP**      |

## /public

| Carpeta        | Descripción
| ------------- |:-------------:|
| /css      | CSS's de la aplicación |
| /img      | Imágenes          |
| /js     | Scripts de JavaScript      |
| /uploads | Dentro de esta carpeta se subirán las imágenes de la aplicación (por ejemplo, fotos de sagardotegis)      |
| /vendor   | Contiene los proyectos instalados con ```composer```|

## /src

| Carpeta        | Descripción
| ------------- |:-------------:|
| /controlador      | Controladores |
| /modelo      | Modelos          |
| /vista     | Vistas     |

## /templates

Ésta carpeta contiene archivos que sirven como plantillas, como por ejemplo el menú de la página.