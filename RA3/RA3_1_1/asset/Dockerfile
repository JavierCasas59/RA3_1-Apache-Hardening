# Se utiliza Ubuntu versión 24.04
FROM ubuntu:24.04

# Instalar apache y openssl
RUN apt update && apt install -y apache2 openssl && apt clean

# Se habilitan los módulos necesarios (headers y ssl)
RUN a2enmod headers ssl

# Crear carpeta para los certificados generados
RUN mkdir -p /etc/apache2/ssl

# Generar certificado con su clave pública y privada
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/apache2/ssl/apache-privada.key \
    -out /etc/apache2/ssl/apache-publica.crt \
    -subj "/C=ES/ST=Castellon/L=Castellon de la Plana/O=Ciberseguridad/OU=Sistema/CN=localhost"


# Copiar el archivo de configuración de apache
COPY apache2.conf /etc/apache2/sites-available/apache2.conf

# Activar sitio web
RUN a2ensite apache2.conf

# Copiar sitio web
COPY index.html /var/www/html/index.html

# Exponer los puertos HTTP y HTTPS
EXPOSE 80 443

# Iniciamos Apache en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]
