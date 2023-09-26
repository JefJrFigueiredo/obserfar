<?php

Route::get('/', 'HomeController@welcome');
Route::get('home', 'HomeController@index');

//Rotas da autenticação padrão do Laravel, foi desabilitada 
//até que se saiba trabalhar satisfatoriamente com ela
	// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');
	// Registration Routes...
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');
	// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get('/usuarios', 'UsuarioController@lista');
Route::get('/usuarios/mostra/{id}', 'UsuarioController@mostra')->where('id', '[0-9]+');
Route::get('/usuarios/novo', 'UsuarioController@novo');
Route::post('/usuarios/novo', 'UsuarioController@adiciona');
Route::get('/usuarios/json', 'UsuarioController@listaJson');
Route::get('/usuarios/remove/{id}', 'UsuarioController@remove')->where('id', '[0-9]+');
Route::get('/usuarios/edita/{id}', 'UsuarioController@edita')->where('id', '[0-9]+');
Route::post('/usuarios/confirmaEdicao/', 'UsuarioController@confirmaEdicao');


Route::get('/alergias', 'AlergiaController@lista');
Route::get('/alergias/mostra/{id}', 'AlergiaController@mostra')->where('id', '[0-9]+');
Route::get('/alergias/novo', 'AlergiaController@novo');
Route::post('/alergias/novo', 'AlergiaController@adiciona');
Route::get('/alergias/json', 'AlergiaController@listaJson');
Route::get('/alergias/remove/{id}', 'AlergiaController@remove')->where('id', '[0-9]+');
Route::get('/alergias/edita/{id}', 'AlergiaController@edita')->where('id', '[0-9]+');
Route::post('/alergias/confirmaEdicao/', 'AlergiaController@confirmaEdicao');


Route::get('/arvores', 'ArvoreController@lista');
Route::get('/arvores/mostra/{id}', 'ArvoreController@mostra')->where('id', '[0-9]+');
Route::get('/arvores/novo', 'ArvoreController@novo');
Route::post('/arvores/novo', 'ArvoreController@adiciona');
Route::get('/arvores/json', 'ArvoreController@listaJson');
Route::get('/arvores/remove/{id}', 'ArvoreController@remove')->where('id', '[0-9]+');
Route::get('/arvores/edita/{id}', 'ArvoreController@edita')->where('id', '[0-9]+');
Route::post('/arvores/confirmaEdicao/', 'ArvoreController@confirmaEdicao');


Route::get('/consultas/pacientes', 'ConsultaController@pacientes');
Route::get('/consultas/{id}', 'ConsultaController@lista')->where('id', '[0-9]+');
Route::get('/consultas/mostra/{id}', 'ConsultaController@mostra')->where('id', '[0-9]+');
Route::get('/consultas/novo/{id}', 'ConsultaController@novo')->where('id', '[0-9]+');
Route::post('/consultas/novo', 'ConsultaController@adiciona');
Route::get('/consultas/json', 'ConsultaController@listaJson');
Route::get('/consultas/remove/{id}', 'ConsultaController@remove')->where('id', '[0-9]+');
Route::get('/consultas/edita/{id}', 'ConsultaController@edita')->where('id', '[0-9]+');
Route::post('/consultas/confirmaEdicao/', 'ConsultaController@confirmaEdicao');
Route::get('/consultas/prontuario/{id}', 'ConsultaController@prontuario')->where('id', '[0-9]+');


Route::get('/diagnosticos', 'DiagnosticoController@lista');
Route::get('/diagnosticos/mostra/{id}', 'DiagnosticoController@mostra')->where('id', '[0-9]+');
Route::get('/diagnosticos/novo', 'DiagnosticoController@novo');
Route::post('/diagnosticos/novo', 'DiagnosticoController@adiciona');
Route::get('/diagnosticos/json', 'DiagnosticoController@listaJson');
Route::get('/diagnosticos/remove/{id}', 'DiagnosticoController@remove')->where('id', '[0-9]+');
Route::get('/diagnosticos/edita/{id}', 'DiagnosticoController@edita')->where('id', '[0-9]+');
Route::post('/diagnosticos/confirmaEdicao/', 'DiagnosticoController@confirmaEdicao');


Route::get('/doencas', 'DoencaController@lista');
Route::get('/doencas/mostra/{id}', 'DoencaController@mostra')->where('id', '[0-9]+');
Route::get('/doencas/novo', 'DoencaController@novo');
Route::post('/doencas/novo', 'DoencaController@adiciona');
Route::get('/doencas/json', 'DoencaController@listaJson');
Route::get('/doencas/remove/{id}', 'DoencaController@remove')->where('id', '[0-9]+');
Route::get('/doencas/edita/{id}', 'DoencaController@edita')->where('id', '[0-9]+');
Route::post('/doencas/confirmaEdicao/', 'DoencaController@confirmaEdicao');


Route::get('/encaminhamentos', 'EncaminhamentoController@lista');
Route::get('/encaminhamentos/mostra/{id}', 'EncaminhamentoController@mostra')->where('id', '[0-9]+');
Route::get('/encaminhamentos/novo', 'EncaminhamentoController@novo');
Route::post('/encaminhamentos/novo', 'EncaminhamentoController@adiciona');
Route::get('/encaminhamentos/json', 'EncaminhamentoController@listaJson');
Route::get('/encaminhamentos/remove/{id}', 'EncaminhamentoController@remove')->where('id', '[0-9]+');
Route::get('/encaminhamentos/edita/{id}', 'EncaminhamentoController@edita')->where('id', '[0-9]+');
Route::post('/encaminhamentos/confirmaEdicao/', 'EncaminhamentoController@confirmaEdicao');


Route::get('/gruporiscos', 'GrupoRiscoController@lista');
Route::get('/gruporiscos/mostra/{id}', 'GrupoRiscoController@mostra')->where('id', '[0-9]+');
Route::get('/gruporiscos/novo', 'GrupoRiscoController@novo');
Route::post('/gruporiscos/novo', 'GrupoRiscoController@adiciona');
Route::get('/gruporiscos/json', 'GrupoRiscoController@listaJson');
Route::get('/gruporiscos/remove/{id}', 'GrupoRiscoController@remove')->where('id', '[0-9]+');
Route::get('/gruporiscos/edita/{id}', 'GrupoRiscoController@edita')->where('id', '[0-9]+');
Route::post('/gruporiscos/confirmaEdicao/', 'GrupoRiscoController@confirmaEdicao');


Route::get('/inapropriados', 'InapropriadoController@lista');
Route::get('/inapropriados/mostra/{id}', 'InapropriadoController@mostra')->where('id', '[0-9]+');
Route::get('/inapropriados/novo', 'InapropriadoController@novo');
Route::post('/inapropriados/novo', 'InapropriadoController@adiciona');
Route::get('/inapropriados/json', 'InapropriadoController@listaJson');
Route::get('/inapropriados/remove/{id}', 'InapropriadoController@remove')->where('id', '[0-9]+');
Route::get('/inapropriados/edita/{id}', 'InapropriadoController@edita')->where('id', '[0-9]+');
Route::post('/inapropriados/confirmaEdicao/', 'InapropriadoController@confirmaEdicao');


Route::get('/interacoes/{id}', 'InteracaoController@lista')->where('id', '[0-9]+');
Route::get('/interacoes/mostra/{id}', 'InteracaoController@mostra')->where('id', '[0-9]+');
Route::get('/interacoes/novo/{id}', 'InteracaoController@novo')->where('id', '[0-9]+');
Route::post('/interacoes/novo', 'InteracaoController@adiciona');
Route::get('/interacoes/json', 'InteracaoController@listaJson');
Route::get('/interacoes/remove/{id}', 'InteracaoController@remove')->where('id', '[0-9]+');
Route::get('/interacoes/edita/{id}', 'InteracaoController@edita')->where('id', '[0-9]+');
Route::post('/interacoes/confirmaEdicao/', 'InteracaoController@confirmaEdicao');


Route::get('/medicamentos', 'MedicamentoController@lista');
Route::get('/medicamentos/mostra/{id}', 'MedicamentoController@mostra')->where('id', '[0-9]+');
Route::get('/medicamentos/novo', 'MedicamentoController@novo');
Route::post('/medicamentos/novo', 'MedicamentoController@adiciona');
Route::get('/medicamentos/json', 'MedicamentoController@listaJson');
Route::get('/medicamentos/remove/{id}', 'MedicamentoController@remove')->where('id', '[0-9]+');
Route::get('/medicamentos/edita/{id}', 'MedicamentoController@edita')->where('id', '[0-9]+');
Route::post('/medicamentos/confirmaEdicao/', 'MedicamentoController@confirmaEdicao');


Route::get('/pacientes', 'PacienteController@lista');
Route::get('/pacientes/mostra/{id}', 'PacienteController@mostra')->where('id', '[0-9]+');
Route::get('/pacientes/novo', 'PacienteController@novo');
Route::post('/pacientes/novo', 'PacienteController@adiciona');
Route::get('/pacientes/json', 'PacienteController@listaJson');
Route::get('/pacientes/remove/{id}', 'PacienteController@remove')->where('id', '[0-9]+');
Route::get('/pacientes/edita/{id}', 'PacienteController@edita')->where('id', '[0-9]+');
Route::post('/pacientes/confirmaEdicao/', 'PacienteController@confirmaEdicao');


Route::get('/paramfisios/{id}', 'ParamFisioController@lista')->where('id', '[0-9]+');
Route::get('/paramfisios/mostra/{id}', 'ParamFisioController@mostra')->where('id', '[0-9]+');
Route::get('/paramfisios/novo/{id}', 'ParamFisioController@novo')->where('id', '[0-9]+');
Route::post('/paramfisios/novo', 'ParamFisioController@adiciona');
Route::get('/paramfisios/json', 'ParamFisioController@listaJson');
Route::get('/paramfisios/remove/{id}', 'ParamFisioController@remove')->where('id', '[0-9]+');
Route::get('/paramfisios/edita/{id}', 'ParamFisioController@edita')->where('id', '[0-9]+');
Route::post('/paramfisios/confirmaEdicao/', 'ParamFisioController@confirmaEdicao');


Route::get('/pictogramas', 'PictogramaController@lista');
Route::get('/pictogramas/mostra/{id}', 'PictogramaController@mostra')->where('id', '[0-9]+');
Route::get('/pictogramas/novo', 'PictogramaController@novo');
Route::post('/pictogramas/novo', 'PictogramaController@adiciona');
Route::get('/pictogramas/json', 'PictogramaController@listaJson');
Route::get('/pictogramas/remove/{id}', 'PictogramaController@remove')->where('id', '[0-9]+');
Route::get('/pictogramas/edita/{id}', 'PictogramaController@edita')->where('id', '[0-9]+');
Route::post('/pictogramas/confirmaEdicao/', 'PictogramaController@confirmaEdicao');


Route::get('/qualidadevidas', 'QualidadevidaController@lista');
Route::get('/qualidadevidas/mostra/{id}', 'QualidadevidaController@mostra')->where('id', '[0-9]+');
Route::get('/qualidadevidas/novo', 'QualidadevidaController@novo');
Route::post('/qualidadevidas/novo', 'QualidadevidaController@adiciona');
Route::get('/qualidadevidas/json', 'QualidadevidaController@listaJson');
Route::get('/qualidadevidas/remove/{id}', 'QualidadevidaController@remove')->where('id', '[0-9]+');
Route::get('/qualidadevidas/edita/{id}', 'QualidadevidaController@edita')->where('id', '[0-9]+');
Route::post('/qualidadevidas/confirmaEdicao/', 'QualidadevidaController@confirmaEdicao');


Route::get('/secao2', 'Secao2Controller@lista');
Route::get('/secao2/mostra/{id}', 'Secao2Controller@mostra')->where('id', '[0-9]+');
Route::get('/secao2/novo', 'Secao2Controller@novo');
Route::post('/secao2/novo', 'Secao2Controller@adiciona');
Route::get('/secao2/json', 'Secao2Controller@listaJson');
Route::get('/secao2/remove/{id}', 'Secao2Controller@remove')->where('id', '[0-9]+');
Route::get('/secao2/edita/{id}', 'Secao2Controller@edita')->where('id', '[0-9]+');
Route::post('/secao2/confirmaEdicao/', 'Secao2Controller@confirmaEdicao');


Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/novo', 'ProdutoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita')->where('id', '[0-9]+');
Route::post('/produtos/confirmaEdicao/', 'ProdutoController@confirmaEdicao');

Route::get('/relatorios', 'RelatorioController@lista');

Route::get('/adesaotratamentos', 'AdesaoTratamentoController@lista');
Route::get('/adesaotratamentos/mostra/{id}', 'AdesaoTratamentoController@mostra')->where('id', '[0-9]+');
Route::get('/adesaotratamentos/novo', 'AdesaoTratamentoController@novo');
Route::post('/adesaotratamentos/novo', 'AdesaoTratamentoController@adiciona');
Route::get('/adesaotratamentos/json', 'AdesaoTratamentoController@listaJson');
Route::get('/adesaotratamentos/remove/{id}', 'AdesaoTratamentoController@remove')->where('id', '[0-9]+');
Route::get('/adesaotratamentos/edita/{id}', 'AdesaoTratamentoController@edita')->where('id', '[0-9]+');
Route::post('/adesaotratamentos/confirmaEdicao/', 'AdesaoTratamentoController@confirmaEdicao');

Route::get('/prms/novo', 'PRMController@novo');
Route::post('/prms/novo', 'PRMController@adiciona');

//PERGUNTAS
Route::get('/prms/pergunta2', 'PRMController@pergunta2');
Route::get('/prms/pergunta3', 'PRMController@pergunta3');
Route::get('/prms/pergunta4', 'PRMController@pergunta4');
Route::get('/prms/pergunta5', 'PRMController@pergunta5');
Route::get('/prms/pergunta6', 'PRMController@pergunta6');
Route::get('/prms/pergunta7', 'PRMController@pergunta7');

//PRMS
Route::get('/prms/prm1', 'PRMController@PRM1');
Route::post('/prms/prm1', 'PRMController@adiciona');
Route::get('/prms/prm2', 'PRMController@PRM2');
Route::post('/prms/prm2', 'PRMController@adiciona');
Route::get('/prms/prm3', 'PRMController@PRM3');
Route::post('/prms/prm3', 'PRMController@adiciona');
Route::get('/prms/prm4', 'PRMController@PRM4');
Route::post('/prms/prm4', 'PRMController@adiciona');
Route::get('/prms/prm5', 'PRMController@PRM5');
Route::post('/prms/prm5', 'PRMController@adiciona');
Route::get('/prms/prm6', 'PRMController@PRM6');
Route::post('/prms/prm6', 'PRMController@adiciona');
Route::get('/prms/fimavaliacao', 'PRMController@fimavaliacao');
Route::post('/prms/fimavaliacao', 'PRMController@adiciona');

Route::get('/rams', 'RAMController@lista');
Route::get('/rams/mostra/{id}', 'RAMController@mostra')->where('id', '[0-9]+');
Route::get('/rams/novo', 'RAMController@novo');
Route::post('/rams/novo', 'RAMController@adiciona');
Route::get('/rams/json', 'RAMController@listaJson');
Route::get('/rams/remove/{id}', 'RAMController@remove')->where('id', '[0-9]+');
Route::get('/rams/edita/{id}', 'RAMController@edita')->where('id', '[0-9]+');
Route::post('/rams/confirmaEdicao/', 'RAMController@confirmaEdicao');