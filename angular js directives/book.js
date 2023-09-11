var myApp = angular.module("myModule",[])
 .controller("myController",function($scope){
 var books=[
 {title:"Junior Level Books Introduction to Computer",author:"Amit Garg", 
publisher:"Reader's Zone",price:"Rs.200/-" },
 {title:"Client Server Computing",author:" Lalit Kumar ", publisher:"Sun India Publications",price:"Rs.400/-" },
 {title:" Mobile Computing",author:"Vinay Kumar Singhal", publisher:"K Nath & Sons",price:"Rs.150/-" },
 {title:"CBOT",author:"Verma", publisher:
 "Thakur Publications ",price: "Rs.80/-" },
 ];
 $scope.books=books;
 });