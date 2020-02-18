angular.module("meuModulo")
.controller("indexController",function($scope){
	$scope.titulo = "Home";
})
.controller("vendaController",function($scope){
	$scope.titulo = "Ponto de Venda";
})
.controller("relatorioController",function($scope){
	$scope.titulo = "Relatórios";
})
.controller("configController",function($scope){
	$scope.titulo = "Configurações";
});