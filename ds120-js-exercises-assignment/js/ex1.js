// Exercicio 1 Js
 var velha = "";

 function oldlady() {
   velha = velha + '#';
   console.log(velha);
   if(velha.length >= 7){
     return;
   }else{
     oldlady();
   }
 }
 oldlady();
