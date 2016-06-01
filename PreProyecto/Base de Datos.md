- USUARIO:
 - ID: nombre unico (int) / PRIMARY KEY
 - Pass: contraseña (varchar)
 - Email: email (varchar)
 - Online: estado (boolean/tinyint)
 
- PERSONAJE:
  - Experiencia: exp del personaje (int)
  - Nivel: nivel del personaje (int)
  - Nickname: nick del personaje (varchar) / PRIMARY KEY
  - MovMax: cantidad de movimientos maximos (int)
  - Vida: cantidad de vida del personaje (int)
  
- HABILIDADES:
  - Tipo: tipo A o B (boolean/tinyint)
  - Nombre: nombre de cada habilidad (varchar)
  - Descripcion: descripcion de cada habilidad (varchar)
  - Formula: calculo matematico para determinar daños (varchar)
  - Nmov: numero de movimientos que ocupa la habilidad (int)
  
- COLA:
  - Nombre: nombre asignado por el usuario (varchar)
  - ID: id unico de cada cola (int) / PRIMARY KEY
  - DefAtq: tipo de cola (boolean/tinyint)
  - RefPersonaje: para referenciar con la clase PERSONAJE (varchar)
  - RefHabilidades: para referenciar con la clase HABILIDADES (varchar)
  
- CLASE:
  - Nombre: nombre de la clase (varchar) / PRIMARY KEY
  - Descripcion: descripcion de la clase (varchar)
  - Shortname: determina si es clase A o B (varchar)
  - RefPersonaje: para referenciar con la clase PERSONAJE (varchar)
  
- ARBOLA:
  - Tipo: tipo A o B (boolean/tinyint)
  - RefClase: para referenciar con la clase CLASE (varchar)
  - RefHabilidades: para referenciar con la clase HABILIDADES (varchar)
  - ID: id unico (int) / PRIMARY KEY
  
- STATS:
  - Nombre: nombre del stat (varchar) / PRIMARY KEY
  - Nivel: nivel del stat (int)
  - Descripcion: descripcion del stat (varchar)
  
- PELEA:
  - IdAtq: id del personaje atacante (int)
  - IdDef: id del personaje defensor (int)
  - Fecha: fecha de la pelea (datetime)
  - Win: ganador de la pelea (varchar)
  - RefRound: para referenciar con la clase ROUND (varchar)
  - RefPersonaje: para referenciar con la clase PERSONAJE (varchar)
  
- ROUND:
  - Numero: numero de round (int)
  - VelAtq: velocidad del atacante (int)
  - VelDef: velocidad del defensor (int)
  - RefPaso: para referenciar con la clase PASO (varchar)
  
- PASO:
  - MovA: movimientos de ataque del paso (varchar)
  - MovB: movimientos de defensa del paso (varchar)
  - VidAtq: vida del atacante (int)
  - VidDef: vida del defensor (int)
  - Numero: numero de paso (int)
  - Inic: iniciante en el paso (varchar)
  
