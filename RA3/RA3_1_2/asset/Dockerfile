FROM pps13228313/pps:pr1

# Instalar PHP y modsecurity
RUN apt update && apt install -y \
    php \
    libapache2-mod-php \
    libapache2-mod-security2 \
    modsecurity-crs

# Activar el  módulo security2
RUN a2enmod security2

# Aplicar configuración de modsecurity con el objetivo de bloquear ataques
RUN cp /etc/modsecurity/modsecurity.conf-recommended /etc/modsecurity/modsecurity.conf && \
    sed -i 's/SecRuleEngine DetectionOnly/SecRuleEngine On/' /etc/modsecurity/modsecurity.conf

# Copiar archivo de configuración
COPY modsecurity.conf /etc/modsecurity/modsecurity.conf

# Página para probar ataques
COPY post.php /var/www/html/post.php

EXPOSE 80 443

CMD ["apachectl", "-D", "FOREGROUND"]
