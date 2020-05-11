<?php

function getModulesArray(){
	$a = [
		'0' => 'Servicios',//Productos
		'1' => 'Blog'

	];

	return $a;
}

function getRoleUserArrayKey($id){
	$roles = [
		'0' => 'Usuario Normal',//Productos
		'1' => 'Administrador'

	];

	return $roles[$id];
}

function getUserStatusArrayKey($id){
	$status = [
		'0' => 'Registrado',//Productos
		'1' => 'Verificado',
		'100' => 'Baneado'

	];

	return $status[$id];
}
