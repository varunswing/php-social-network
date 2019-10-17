var x = new Date();
var d = x.getHours();
if (d < 12) {
  alert("Good Morining");
} else {
  alert("Good Evening");
}
document.body.style.backgroundColor = "yellow";

function Ispalindrome(str) {
  var len = str.length;
  var mid = Math.floor(len / 2);

  for (var i = 0; i < mid; i++) {
    if (str[i] !== str[len - 1 - i]) {
      return false;
    }
  }
  return true;
}
var person = prompt("Enter the string to check palindrome: ");
alert(Ispalindrome(person));

var arr = [];

for (var i = 0; i < 5; i++) {
  arr[i] = prompt('Enter Element ' + (i + 1));
}
for (var i = 1; i < arr.length; i++)
  for (var j = 0; j < i; j++)
    if (arr[i] < arr[j]) {
      var x = arr[i];
      arr[i] = arr[j];
      arr[j] = x;
    }
document.write(arr);