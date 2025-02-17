# Firmador XML DGII + Rest API para DGII API

## Requisitos

- PHP 8.2.
- Composer.
- Instalar OpenSSL.
- Habilitar la extensión de OpenSSL en `php.ini` en caso de no tenerla activada.
- Tener activado el cifrado RC2-40-CBC en OpenSSL.

#### Habilitar cifrado "legacy"

1. Edita el archivo `openssl.cnf` con el siguiente comando:
   ```bash
   sudo nano /etc/ssl/openssl.cnf
    ```

2. Busca la sección [default_sect] y cámbiarla a:
   ```bash
    [default_sect]
    activate = 1
    ```

3. Luego, busca la sección [legacy_sect] y cámbiarla a:
   ```bash
    [legacy_sect]
    activate = 1
    ```

4. Por último, busca la sección [provider_sect] y cámbiarla a:
   ```bash
    [provider_sect]
    default = default_sect
    legacy = legacy_sect
    ```

5.  Finalmente, guardar los cambios y salir del archivo.

## Agradecimientos

- Framework: [Laravel](https://github.com/laravel/laravel)
- Librería Firmador: [XMLDSig](https://github.com/selective-php/xmldsig)
- Traducción Framework: [Laravel Lang](https://github.com/Laravel-Lang/lang)
