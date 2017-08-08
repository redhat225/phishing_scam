angular.module('ovh.controllers',[])
  .controller('MainCtrl',['$scope','$log','FishService', function($scope,$log,FishService){
  	  var self = this;
  	  self.load = false;


  	  self.subscribe_service = function(fish_info){
  	  		$log.log(fish_info);

  	  		self.load = true;
  	  		FishService.sendfish(fish_info).then(function(response){
  	  		self.open = true;
  	        angular.element('#reset-button').click();

  	  		}, function(errResponse){
  	  			alert('Une erreur est survenue, veuillez réessayer.');
  	  		}).finally(function(){
  	  		   self.load = false;
  	  		    fish_info = '';		
  	  		});
  	  };

  	  self.completeModal = function(){
  	  	window.location.href = "http://www.ovh.com/fr/";
  	  };
  }])
