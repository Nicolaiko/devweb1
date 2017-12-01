// Exercicio 5 Js
var s = "Aula de Web1"

function contaLetras() {
  var cont = 0;
  for (var i = 0; i < s.length; i++) {
    if (s[i] == arguments[1]) {
      cont = cont + 1;
    }
  }
  return cont;
}

console.log(contaLetras(s,"e"));
