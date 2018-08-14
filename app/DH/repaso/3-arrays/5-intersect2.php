<?php
/*
 * 1) Armar una función que, dados dos arrays ASOCIATIVOS recibidos por parámetro,
 * retorne un nuevo array intercalando los valores de los arrays recibidos.
 * Si hay valores repetidos, deben quedar los del segundo parámetro.
 * EJ: [
 *       'Nombre' => 'Reunion con Raúl',
 *       'Fecha' => '2018-05-29 10:00',
 *       'Lugar' => 'El bar de Alberto'
 *     ] y [
 *        'Fecha' => '2018-05-30 15:00',
 *        'Participantes' => ['Raul', 'Isabel', 'Yo']
 *     ]
 * Retornaría [
 *     'Nombre' => 'Reunion con Raúl',
 *     'Fecha' => '2018-05-30 15:00',
 *     'Lugar' => 'El bar de Alberto',
 *     'Participantes' => ['Raul', 'Isabel', 'Yo']
 * ]
 *
 * 2) Llamar a la función con diferentes arrays y verificar el resultado.
 */
