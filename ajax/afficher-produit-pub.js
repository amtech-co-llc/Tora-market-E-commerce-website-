const contents_list_add = document.getElementById("contents-list-add");

const xhr = new XMLHttpRequest();
xhr.open("POST", "php/afficher-produit-pub.php", true);
xhr.onload = () => {
  if (xhr.readyState == xhr.DONE && xhr.status == 200) {
    const data = xhr.response;
    contents_list_add.innerHTML = data;
  }
};
xhr.send();
