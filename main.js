

let nama 
let NIM 
let Project 

nama =  'Fathur Rizqi Putra Pratama'
NIM =  22090062
Project = 'Pendidikan'

alert( `welcome my name is ${nama} nim saya yaitu ${NIM} project saya kali ini yaitu bertema ${Project}`)

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }


