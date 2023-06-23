'use strict'  
console.log("coucous searchnamejs");

let inputname = document.querySelector('#user-searchname');

let resultsname = document.querySelector('#resultname');
//let li = document.createElement('li');
//console.log(results);

inputname.addEventListener('change', function(){
// search c'est la route 
// input.value c'est la valeur searchItem
//etape 1 ;  la requete se fait sur l'url  fonction searchuser() dans le controller 
// est envoyé au controller 
    fetch('/searchname/' + inputname.value)

  
//etape 4 on recupere le json de la reponse du controller 
    .then(response => response.json())
    //etape 5 on recupere la reponse qui est transforme par 
    //fonction response.json qui transforme en format exploitable pour js
    .then( users => {
        // je vide reponse
        resultsname.innerHTML = ''
      console.log(users);
       //je remplis
        users.forEach( user => {
        let div = document.createElement('div')
        let name = user.fullName;
        console.log(name);
        div.classList.add('container')
        div.innerHTML = `
        
                      <h2>${ user.email } </h2>
                     
                      <a href="user/${ user.id }">Voir détail client</a>
               `;


           results.append(div);

        })
    })
 
})




