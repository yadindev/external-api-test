<?php

use App\Http\Controllers\PostController;

test('la ruta inicial retorna un estado de redireccion', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
});

test('la funcion index devuelve una lista de la api externa', function () {
    $controller = new PostController();

    $response = $controller->index();
    expect($response->posts)->toBeArray();
});

