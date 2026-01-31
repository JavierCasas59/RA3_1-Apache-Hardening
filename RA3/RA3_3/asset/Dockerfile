FROM pps13228313/pps:pr6

# Instalar dependencias 
RUN apt-get update && apt-get install -y \
    curl \
    nano 

# Habilitar módulos para su correcto funcionamiento
RUN a2enmod headers rewrite security2 ssl

# Copiar configuración de ModSecurity
COPY modsecurity.conf /etc/modsecurity/modsecurity.conf

# Copiar fichero de configuraciones
COPY apache2.conf /etc/apache2/sites-available/apache2.conf

# Habilitar fichero de configuraciones
RUN a2ensite apache2.conf 

# Asegurar permisos de carpetas sensibles (Hardening de permisos)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 750 /etc/apache2/conf-available

# Exponer puertos
EXPOSE 80 443

CMD ["apache2ctl", "-D", "FOREGROUND"]
