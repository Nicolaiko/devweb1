// Exercicio 4 Js
var a = [1,2,3];

function inverte() {
  for (var i = 0; i < 2; i++) {
    var j = 2 - i;
    var u = a[i];
    a[i] = a[j];
    a[j] = u;
  }
  console.log(a);
}

inverte();
