# Apache Hardening
## Introducción
Este repositorio contiene el desarrollo de una serie de prácticas orientadas al hardening de un servidor web Apache desplegado en contenedores Docker. El objetivo principal es aumentar la seguridad del servidor web mediante una serie de mecanismos de protección y buenas prácticas.

El hardening de servidores web es un aspecto clave en la puesta en producción de aplicaciones, ya que permite reducir la superficie de ataque, minimizar vulnerabilidades y proteger los servicios frente a ataques como: **XSS**, **Inyección SQL**, **Ataque de denegación de servicio**, **Ejecución remota de código malicioso**.

Todas las prácticas se implementan dentro de contenedores Docker, aplicando una estrategia de seguridad en capas, donde cada imagen hereda las configuraciones de seguridad de la anterior.

## Estructura
Este repositorio se divide en una serie de prácticas, donde cada una presenta sus configuraciones específicas y su correspondiente documentación.

1. Práctica 3.1.1: CSP
2. Práctica 3.1.2: Web Application Firewall (WAF)
3. Práctica 3.1.3: Instalar reglas OWASP
4. Práctica 3.1.4: Evitar ataques DDoS
5. Práctica 3.2: Certificados
6. Práctica 3.3: Mejores prácticas de endurecimiento de Apache

Mediante el siguiente enlace se puede acceder directamente a mi repositorio de Docker Hub.
```bash
    https://hub.docker.com/repository/docker/pps13228313/pps/general
```
