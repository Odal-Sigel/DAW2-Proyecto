<h1 align='center'><i>DAW2 - Proyecto</i></h1>

<i>_Nombre del proyecto_</i>

### :technologist: CodeIgniter

Ejemplo del archivo _.env_

```bash
#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------

CI_ENVIRONMENT = development

#--------------------------------------------------------------------
# APP
#--------------------------------------------------------------------

app.baseURL = 'http://IP-Servidor/public'

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

database.default.hostname = localhost
database.default.database = base_de_datos
database.default.username = usuario
database.default.password = contraseña
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306

```

### :paintbrush: Tailwindcss

Primero hay que instalar los módulos necesarios para su funcionamiento.

```bash
pnpm install
```

Una vez instalados, hay que iniciar el proceso de construcción de Tailwindcss CLI

```bash
pnpm tailwindcss -i ./app/Views/css/input.css -o ./public/css/main.css --watch
```
