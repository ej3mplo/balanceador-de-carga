# Balancedor de carga

## Resumen

Ejemplo de balanceador de carga de Apache configurado con docker y docker-compose. Se utilizo la imagen de docker httpd como base para el balanceador de carga y la imagen de php:7.3.3-apache para cada nodo. El ejemplo que se siguió para realizar esta infraestructura se encuentra en los siguientes enlaces:

  - [Como configurar Apache como Proxy Inverso y Load Balancer](https://www.youtube.com/watch?v=col3QKMikhI)
  - [Guía de Proxy Inverso](https://httpd.apache.org/docs/trunk/es/howto/reverse_proxy.html)

Se configuran cuatro nodos para el cluster y un nodo para el  balanceador de carga.

## Enlaces extras

  - [Imagen de HTTP Apache](https://hub.docker.com/_/httpd)
  - [Imagen de PHP con Apache](https://hub.docker.com/_/php)