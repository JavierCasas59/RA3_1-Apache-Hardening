# Usa la imagen con mod_evasive y OWASP CRS como base
FROM pps13228313/pps:pr4

# Instalar herramientas
RUN apt update && apt install -y \
    curl \
    nano 

# Activar el módulo SSL en Apache
RUN a2enmod ssl

# Generar certificado 
RUN openssl req -x509 -nodes -days 365 \
    -newkey rsa:2048 -keyout /etc/apache2/ssl/apache.key -out /etc/apache2/ssl/apache.crt \
    -subj "/C=ES/ST=Castellon/L=Castellon de la Plana/O=Ciberseguridad/OU=Sistemas/CN=www.midominioseguro.com"

# Copiar fichero de configuración de apache
COPY apache2.conf /etc/apache2/sites-available/apache2.conf

#Asignar permisos 
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html 

# Habilitar el sitio SSL en Apache
RUN a2ensite apache2.conf && apachectl -k restart

# Reiniciar Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]

