## Configuración de Apache y DNS Local

Archivo C:\xampp\apache\conf\extra\httpd-vhosts.conf
```
<VirtualHost *:80>
    ServerAdmin webmaster@myappv.com
    DocumentRoot "C:/xampp/htdocs/4avpr/public"
    ServerName myappv.com
    ServerAlias www.myappv.com
    ErrorLog "logs/myappv.com-error.log"
    CustomLog "logs/myappv.com-access.log" common
</VirtualHost>
```

Archivo C:\Windows\System32\drivers\etc\hosts
```
127.0.0.1	myappv.com	www.myappv.com
```