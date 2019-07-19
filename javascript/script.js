function tamanho_menu(){
  var height = window.innerHeight;
  var element = document.getElementById('menu');

  element.style.height = height;
}

function btn_menu(){
  var element = document.getElementById('menu');
  element.style.display = "inline-block";
  element.style.left = "0";

  var elementTwo = document.getElementById('btn_fechar');
  elementTwo.style.display = "inline-block";

  var elementTree = document.getElementById('btn_abrir');
  elementTree.style.display = "none";

}

function btn_fechar(){
  var element = document.getElementById('menu');
  element.style.display = "none";
  element.style.left = "-60%";

  var elementTwo = document.getElementById('btn_fechar');
  elementTwo.style.display = "none";

  var elementTree = document.getElementById('btn_abrir');
  elementTree.style.display = "inline-block";
}
