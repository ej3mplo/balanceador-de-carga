FROM httpd

# Directorio de configuración de Apache
WORKDIR /usr/local/apache2/conf

# Se añade configuración del balanceador de carga
COPY ./balanceador.conf extra/httpd-vhosts.conf
RUN sed -i -e 's/^#\(Include .*httpd-vhosts.conf\)/\1/' httpd.conf

# Se liberan módulos requeridos para el correcto funcionamiento del balanceador
RUN sed -i -e 's/^#\(LoadModule proxy_.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_ajp_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_balancer_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_connect_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_express_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_fcgi_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_fdpass_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_ftp_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_http_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_scgi_module.*\)/\1/' httpd.conf
# RUN sed -i -e 's/^#\(LoadModule proxy_wstunnel_module.*\)/\1/' httpd.conf

# Modulos necesarios no mencionados
RUN sed -i -e 's/^#\(LoadModule slotmem_shm_module.*\)/\1/' httpd.conf
RUN sed -i -e 's/^#\(LoadModule xml2enc_module.*\)/\1/' httpd.conf
RUN sed -i -e 's/^#\(LoadModule watchdog_module.*\)/\1/' httpd.conf

# Tipo de balanceador
RUN sed -i -e 's/^#\(LoadModule lbmethod_byrequests_module.*\)/\1/' httpd.conf

EXPOSE 80