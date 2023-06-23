'use strict'  
console.log("coucous searchjs");

let input = document.querySelector('#user-search');

let results = document.querySelector('#result');
//let li = document.createElement('li');
//console.log(results);

input.addEventListener('change', function(){
// search c'est la route 
// input.value c'est la valeur searchItem
//etape 1 ;  la requete se fait sur l'url  fonction searchuser()
// est envoyé au controller 
    fetch('/search/' + input.value)

  
//etape 4 on recupere le json de la reponse du controller 
    .then(response => response.json())
    //etape 5 on recupere la reponse qui est transforme par 
    //fonction response.json qui transforme en format exploitable pour js
    .then( users => {
        // je vide reponse
        results.innerHTML = ''
      console.log(users);
       //je remplis
        users.forEach( user => {
        let div = document.createElement('div')
        let email = user.email;
        console.log(email);
        div.classList.add('container')
        div.innerHTML = `
        
                      <h2>${ user.fullName } </h2>
                     
                      <a href="user/${ user.id }">Voir détail client</a>
               `;


           results.append(div);

        })
    })
 
})




