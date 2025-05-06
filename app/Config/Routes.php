<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// ⚙️ Rota padrão
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// Roteamento automático (desative em produção)
$routes->setAutoRoute(false); // ou true se estiver testando

// 🔐 Rotas de login
$routes->get('/', 'Login::index');                   // Acesso principal redireciona pro login
$routes->get('/login', 'Login::index');              // Tela de login
$routes->post('/autenticar', 'Auth::autenticar'); // Nova rota de autenticação
$routes->get('/sair', 'Auth::sair');                // Logout
$routes->get('/test', 'TesteDB::index');

// 🖥️ Rotas do painel (após login)
$routes->get('/painel', 'Painel::index');




// 🔁 Rotas por ambiente (dev, prod etc.)
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

