<div align="center"># Hackathon Devs 404 🚀</div>

¡Bienvenidos al repositorio de Devs 404! Este proyecto ha sido desarrollado durante la Hackathon organizada por el equipo de EXPEDITION. Nuestro objetivo es crear soluciones innovadoras y de alto impacto que resuelvan problemas reales utilizando tecnología de vanguardia. ¡Esperamos que disfruten explorando nuestro trabajo!

## Estadísticas del Repositorio 📊

<div align="center">
  ![Estado del Proyecto](https://img.shields.io/badge/estado-en%20desarrollo-brightgreen)
  ![Version](https://img.shields.io/badge/version-1.0.0-blue)
  ![GitHub stars](https://img.shields.io/github/stars/jmorales01/hackaton-devs-404)
  ![GitHub PRs](https://img.shields.io/github/issues-pr/jmorales01/hackaton-devs-404)
  ![GitHub forks](https://img.shields.io/github/forks/jmorales01/hackaton-devs-404)
  ![GitHub issues](https://img.shields.io/github/issues/jmorales01/hackaton-devs-404)
</div>

## Estructura del Proyecto 🗂️

- **src/**: Código fuente del proyecto
- **assets/**: Imágenes y otros recursos multimedia


## Tecnologías Utilizadas 💻

- **PHP** (v7.4.24) ![PHP](https://img.icons8.com/color/48/000000/php.png)
- **MySQL** (v8.0.27) ![MySQL](https://img.icons8.com/color/48/000000/mysql.png)
- **Docker** (v20.10.8) ![Docker](https://img.icons8.com/color/48/000000/docker.png)


## Instalación y Configuración 🛠️

Siga los siguientes pasos para configurar el proyecto localmente:

1. Clone el repositorio:
   ```bash
   git clone https://github.com/jmorales01/hackaton-devs-404.git
   ```
2. Navegue al directorio del proyecto:
   ```bash
   cd hackaton-devs-404
   ```
3. Abre en tu editor favorito:
   ```bash
   code .
   ```


## Ejecutar el Contenedor Docker 🐳

Para ejecutar este proyecto con Docker, asegúrese de tener Docker y Docker Compose instalados en su máquina. Luego, siga estos pasos:

1. Ejecute el siguiente comando en la raíz del proyecto para levantar los contenedores:
   ```bash
   docker-compose up -d
   ```
2. Acceda a la aplicación web en su navegador en http://localhost.
3. Acceda a phpMyAdmin en su navegador en http://localhost:8000.

> **Nota:** Si cambias de dirección de volume elimina el volume anterior antes de ejecuta el contenedor `docker volume rm hackaton-dev-404_persistent`.

### Posibles Soluciones a Problemas 🔧

- **Error de ejecucion de dockerFile composer**
  - Abrir el terminal de docker `docker exec -it php-slim bash`
  - Copiar el instalador `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
  - Ejecutar el archivo de instalación de Composer `php composer-setup.php`
  - Inicializar Composer `php composer.phar init --name=slim/devs --type=application`
  - Instalar dependencias  `php ./composer.phar install --no-dev --no-progress --no-interaction`
  - Añadir la dependencia 
```bash
  php composer.phar require slim/slim:^4.13.0
  php composer.phar require slim/psr7:^1.0 --with-all-dependencies
  php composer.phar require nyholm/psr7 nyholm/psr7-server
  php composer.phar require guzzlehttp/psr7:^2.0
  php composer.phar require laminas/laminas-diactoros
```

- **Error de conexión a la base de datos:**
  - Asegúrese de que el contenedor de la base de datos está en ejecución.
  - Verifique los detalles de conexión (nombre de usuario, contraseña, nombre de la base de datos) en el archivo `docker-compose.yml`.

- **Problemas de permisos con volúmenes:**
  - Asegúrese de que los directorios locales `./dump` y `./conf` tienen los permisos adecuados.
  - Verifique que el usuario de Docker tiene los permisos necesarios para acceder a los volúmenes.

- **Contenedores no se inician correctamente:**
  - Ejecute `docker-compose logs` para ver los registros de los contenedores y diagnosticar el problema.
  - Asegúrese de que no hay conflictos de puertos con otros servicios en su máquina.


## Contribución 🤝

¡Las contribuciones son bienvenidas! Por favor, siga estos pasos para contribuir al proyecto:

1. Fork el repositorio
2. Cree una nueva rama (`git checkout -b feature/nueva-funcionalidad`)
3. Realice los cambios necesarios y haga commit (`git commit -m 'Agrega nueva funcionalidad'`)
4. Envíe los cambios a su fork (`git push origin feature/nueva-funcionalidad`)
5. Cree una solicitud de pull

### Contribuyentes ✨

- [![Usuario1](https://avatars.githubusercontent.com/u/usuario1?v=3&s=48)](https://github.com/usuario1) [Usuario1](https://github.com/usuario1)

## Licencia 📄

Este proyecto está bajo la licencia MIT. Consulte el archivo [LICENSE](LICENSE) para más detalles.

---

<div align="center">
  ##¡Gracias por visitar nuestro repositorio Devs 404! 🌟🧑‍💻
</div>


---
<div align="center">
  <img src="./public/images/devs 404.jpg">
</div>
