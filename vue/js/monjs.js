function confirmDelete(titre, id){
    var question = confirm("Voulez-vous vraiment supprimer « "+titre+ " »");
    if(question){
        document.location.href="?sup="+id;
    }
}
