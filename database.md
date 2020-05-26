## Base de datos del proyecto MyApp

```bash
# conectar al servidor de MySQL ó MariaDB
mysql -u root
MariaDB>
```

```sql
-- crear la base de datos
MariaDB> create database 4avpr;

-- poner en uso la base creada
use 4avpr;

-- crear la tabla users
create table users (
    id int unsigned auto_increment primary key,
    name varchar(12) not null unique,
    email varchar(200) not null unique,
    password varchar(300) not null,
    firstname varchar(25) not null,
    lastname varchar(25) not null
);

-- crear un usuario para acceder al servidor
create user 'myuservesp'@'localhost' identified by '123';

-- otorgar permisos a myuservesp sobre la base 4avpr
grant all on 4avpr.* to 'myuservesp'@'localhost';

-- salir de mysql para probar la conexión con nuevo usuario
MariaDB> exit
bye
```

```bash
# conectar a la base de datos con el nuevo usuario
mysql -u myuservesp -p
Enter password: ***

MariaDB>
```