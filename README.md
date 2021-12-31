# delfos
Bot de telegram escrito en php

En la rama master esta la versión inicial de este bot
lo cual tiene las funciones básicas

La rama main tiene las funcionalidades básicas de la rama master
y tiene la funcionalidad de que envia mensajes automáticos preguardados
como un autorrespondedor.

/**** Atención ****/

En el archivo bot_config.php debes introducir el token del bot de Telegram
y también los parámetros de la conexión a la base de datos.

Estos son datos son sensibles y deben estar en una ubicación segura y 
no accesible. Por tal razón debes ponerlo en la carpeta padre del 
directorio público.
Por ejemplo: Si la carpeta pública de tu hosting es 
/home/usuario/public_html 
Debes poner el archivo en la carpeta /home/usuario

/* Funcionamiento de autorrespondedor */
 
Cuando en el bot se usa el comando /7gemas al usuario se le enviarán
mensajes guardados los días programados.

Estos mensajes se encuentran en la carpeta cron en el archivo 
mensaje_regalos.php
Para que los mensajes se envíen debes programar un cron en tu hosting.

Para lograrlo debes programar un cron para que cada día en la hora
que selecciones se ejecute el archivo que envía cada mensaje.

El archivo que cumple esta función esta en la  carpeta cron y se llama
 delfos_bot.php



