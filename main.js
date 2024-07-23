const search = () =>{
     const searchbox = document.getElementById("search-item").value.toUpperCase();
     const diseaseitems = document.getElementById("disease-list");
     const disease = document.querySelectorAll(".disease");
     const dname = document.getElementsByTagName("h2");



     for(var i=0; i< dname.length; i++){
      let match = disease[i].getElementsByTagName('h2')[0];
      
      if(match){
        let textvalue = match.textContent || match.innerHTML

        if(textvalue.toUpperCase().indexOf(searchbox) > -1){
         disease[i].style.display ="";
        }else{
         disease[i].style.display ="none";
        }
      }
     }
}
