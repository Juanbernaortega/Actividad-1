//mostrar clientes que hay llevado varios equipos 
SELECT clientes.nombre, clientes.apellido, equipos.marca FROM clientes, equipos 
WHERE clientes.id = (SELECT clientes_equipo.id_clientes FROM clientes_equipo WHERE clientes_equipo.id_equipos = (SELECT equipos.id FROM equipos WHERE equipos.marca LIKE 'L%'))

//mostrar tipo de equipo  fecha dem ingreso y carca
SELECT equipos.tipo_de_equipo, orden_de_ingreso.fecha_ingreso, equipos.marca FROM equipos INNER JOIN orden_de_ingreso ON orden_de_ingreso.id = equipos.id

//mostrar el tecnico fecha de ingreso y tipo de equipo
SELECT tecnicos.nombre, tecnicos.apellido, orden_de_ingreso.fecha_ingreso, equipos.tipo_de_equipo FROM tecnicos, orden_de_ingreso, equipos WHERE orden_de_ingreso.fecha_ingreso > '2017/11/01' GROUP by tecnicos.nombre

//mostrar los equipos entregados LG y que allan sido entregados en el 2018-02-09

SELECT equipos.tipo_de_equipo, equipos.marca, orden_de_ingreso.fecha_ingreso FROM equipos, orden_de_ingreso WHERE fecha_ingreso = "2017/11/19" and marca = "LG"