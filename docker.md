PHPMyAdmin will be available at http://localhost:8080

## Docker Compose file:

We define three services: web (Apache+PHP), db (MariaDB), and phpmyadmin.
The web service builds from the Dockerfile in the current directory.
We map port 80 of the container to port 80 of the host for the web service.
We create a volume to persist MySQL data.
PHPMyAdmin is added for easier database management.

## Dockerfile:

We use the official PHP 8.1 image with Apache.
We install necessary system dependencies and PHP extensions.
Composer is installed for PHP package management.
We set the working directory and copy the application files.

## Why this setup:

MariaDB is used instead of MySQL because it's a drop-in replacement with better performance and more features.
PHPMyAdmin is included for easier database management, especially for beginners.
The setup uses volumes to persist data and allow easy development by mapping a local directory to the container.

# Important Docker and Docker Compose Commands

## Docker Compose Commands (Run from project root directory)

1. `docker-compose up -d`

   - Starts all containers defined in docker-compose.yml in detached mode (background)

2. `docker-compose down`

   - Stops and removes all containers defined in docker-compose.yml

3. `docker-compose ps`

   - Shows the status of all containers defined in docker-compose.yml

4. `docker-compose logs [service_name]`

   - Displays logs for all services or a specific service if specified

5. `docker-compose exec [service_name] [command]`

   - Executes a command in a running container
   - Example: `docker-compose exec web bash` opens a bash shell in the web service container

6. `docker-compose build`

   - Builds or rebuilds services defined in docker-compose.yml

7. `docker-compose pull`

   - Pulls images for services defined in docker-compose.yml

8. `docker-compose restart`
   - Restarts all services defined in docker-compose.yml

## Docker Commands (Can be run from anywhere unless specified)

6. `docker ps`

   - Lists all running Docker containers

7. `docker ps -a`

   - Lists all Docker containers, including stopped ones

8. `docker images`

   - Lists all Docker images on your system

9. `docker build -t [image_name] .`

   - Builds a Docker image from a Dockerfile
   - Run from the directory containing your Dockerfile

10. `docker run [image_name]`

    - Creates and starts a container from a specified image

11. `docker stop [container_id]`

    - Stops a running container

12. `docker rm [container_id]`

    - Removes a stopped container

13. `docker rmi [image_id]`

    - Removes a Docker image

14. `docker volume ls`

    - Lists all Docker volumes

15. `docker network ls`
    - Lists all Docker networks
