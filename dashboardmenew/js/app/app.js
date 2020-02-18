angular.module("meuModulo",['ngRoute'])

.config(function($routeProvider){
	$routeProvider
	.when("/home",{
		templateUrl:"templates/home.php",
		controller:"indexController"
	})
	.when("/vendas",{
		templateUrl:"templates/pdv.html",
		controller:"vendaController"
	})
	.when("/relatorio",{
		templateUrl:"templates/relatorio.html",
		controller:"relatorioController"
	})
	.when("/config",{
		templateUrl:"templates/config.html",
		controller:"configController"
	});

	$routeProvider.otherwise({redirectTo:"/home"});

})