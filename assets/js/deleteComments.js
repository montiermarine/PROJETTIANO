
 //on crée une variable qui recupere notre modal grace à son id
 var deleteModal = document.getElementById('deleteModal')
 deleteModal.addEventListener('show.bs.modal', function (event) {
   // au lancement de la modal on recupere le bouton qui a lancé celle ci
   var button = event.relatedTarget
   // on crée une variable afin de recupérer l'id suppression qui est dans l' attribut du bouton
   var recipient = button.getAttribute('data-bs-delete')
   
  
   // on crée une variable grace à l'id de l'input 
   var modalTitle = deleteModal.querySelector('#recipient-name')

 
  // on lie nos variable afin de faire transiter l'id pour l'input 
   modalTitle.value = recipient
   
 })