// Exercicio 2 Js
var velha = "";
var esp = "";
var i = 0;

function oldlady() {
  velha = '# # # # #';
  esp = ' ';
  while (i <= 7) {
    if ((i%2) == 0) {
      console.log(velha);
    }else{
      console.log(esp + velha);
    }
    i += 1;
  }
}

oldlady();
