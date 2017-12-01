// Exercicio 6 Js
var s = "Aula de Web1";
function procuraSubStr() {
  var count = 0;
  var sum = 0;
  do {
    for (var i = 0; i < arguments[1].length; i++) {
      if (arguments[0][i+count] == arguments[1][i]) {
        sum = sum + 1;
      }if (sum == arguments[1].length) {
        return count;
      }
    }
    count = count + 1;
    soma = 0;
  } while (count < arguments[0].length) {
    return -1;
  }
}
console.log(procuraSubStr(s,"web1"));
console.log(procuraSubStr(s,"web2"));
