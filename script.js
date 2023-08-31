const sup = document.getElementsByClassName("btn-sup");
const req = new XMLHttpRequest();
let data=new FormData();
for(let e of sup){
   e.addEventListener('click', function() {
   const id=this.id;     // Je récupére l'id du bouton
   if(confirm("Voulez vous vraiment suprimer cet article ?")){
   data.append('id', id);
   req.open('POST', './models/plats/delete.php', true);
   req.send(data);
   setTimeout(function() {
    window.location.reload();
   }, 400)
   }
}) 
}

let buttonAjout=document.getElementById("button-add");
buttonAjout.addEventListener('click', function(){
   window.location="./views/plats/ajout.php";
})