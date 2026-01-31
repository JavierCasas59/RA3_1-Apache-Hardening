# Importar imagen de la actividad anterior
FROM pps13228313/pps:pr2

# Limpiar reglas
RUN rm -rf /usr/share/modsecurity-crs \
	/usr/share/modsecurity-crs/rules \
	/usr/share/modsecurity-crs/utils

# Instalar git y lipiar ficheros repetidos
RUN apt-get update && \
    apt-get install -y git && \
    rm -rf /var/lib/apt/lists/*

# Clonar las reglas OWASP desde su repositorio de GitHub
RUN git clone https://github.com/SpiderLabs/owasp-modsecurity-crs.git /tmp/owasp-crs && \
    mv /tmp/owasp-crs/crs-setup.conf.example /etc/modsecurity/crs-setup.conf && \
    mkdir -p /etc/modsecurity/rules && cp /tmp/owasp-crs/rules/*.conf /etc/modsecurity/rules/

#Reglas
RUN cat <<'EOF' > /etc/modsecurity/custom-rules.conf
SecRule ARGS:testparam "@contains test" "id:999999,deny,status:403,msg:'ModSecurity los ha Bloqueado'"
EOF

# Configuramos Apache para usar ModSecurity
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Exponemos los puertos
EXPOSE 80 443

# Iniciamos Apache en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]
