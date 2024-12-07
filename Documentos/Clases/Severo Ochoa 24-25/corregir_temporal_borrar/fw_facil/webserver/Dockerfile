FROM ubuntu:latest

# Install Nginx and PHP with necessary extensions for MySQL
RUN apt-get update && \
    apt-get install -y nginx php-fpm php-mysql && \
    rm -rf /var/lib/apt/lists/*

# Copy the PHP web app to the container
COPY app/index.php /var/www/html/

# Expose port 80 for the web server
EXPOSE 80

