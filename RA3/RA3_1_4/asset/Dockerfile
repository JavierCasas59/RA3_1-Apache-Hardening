# Usa la imagen base de Ubuntu
FROM pps13228313/pps:pr3

# Actualizar el sistema e instalar Apache con módulos de seguridad
RUN apt update && apt install -y \
    libapache2-mod-evasive \
    iptables \
    git \
    && apt-get clean

# Crear fichero donde almacenar los logs y cambiar propietario (usuario y grupo)
RUN mkdir -p /var/log/mod_evasive && \
    chown -R www-data:www-data /var/log/mod_evasive

# Copiar archivo de configuración evasive.conf
COPY evasive.conf /etc/apache2/mods-available/evasive.conf

# Habilitar módulo evasive
RUN a2enmod evasive

# Exponemos los puertos
EXPOSE 80 443

# Iniciamos Apache en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]
