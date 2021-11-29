//FETCH POUR HUB NOUVELLES
$linkNews = acf.get( "newsLink" );
			
let nbrNouvelles = 6;
let btnPlus = document.querySelector('#plusNouvelles');
var trier = document.querySelector('#trier');
let ordreNouvelles = 'asc';			

trier.addEventListener("change", function() {
    var tri = this.value;
    ordreNouvelles = this.value;
    changerOrdre(tri);
    
});


//fetch depart et si ordre change

changerOrdre("asc");
function changerOrdre(ordre) {

    fetch(`${linkNews}/wp-json/wp/v2/nouvelles?_embed&orderby=date&order=${ordre}&per_page=13`)
    .then(response => response.json())
    .then(data  => {

        let htmlNouvelles = "";
        let nouvellesList = document.querySelector('.nouvelles-list');

        

        for (let i = 0; i < nbrNouvelles; i++) {
            
            let link = data[i].link;
            let title = data[i].title.rendered;
            let author = data[i].acf.auteur;
            let type = data[i].acf.type;
            let date = data[i].acf.date;
            let resume = data[i].acf.resume;
            let image = data[i]._embedded['wp:featuredmedia'][0].source_url;


            if (resume.length > 60) {
            resume = resume.substr(0, resume.lastIndexOf(' ', 100)) + ' [...]';
            }

            if (title.length > 50) {
            title = title.substr(0, title.lastIndexOf(' ', 50)) + '...';
            } 

            if (i == 0) {

                htmlNouvelles += `
            
                    <a class='nouvelles__link first-new' href='${link}'>
                        <div class="nouvelles__card">
                            <img src="${image}" class="card-img-top first-new-img">
                            <div class="card-body first-new-body">
                                <h3 class="card-title first-new-title">${title}</h3>
                                <p class='nouvelles__type'>${type}</p>
                                    ${resume}
                        </div>
                            <div class="card-footer">
                            <img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> Par ${author}</div>
                        </div>
                    </a>


                        `;

                nouvellesList.innerHTML = htmlNouvelles;


                
            }else {
                htmlNouvelles += `
            
                    <a class='nouvelles__link' href='${link}'>
                        <div class="nouvelles__card">
                            <img src="${image}" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">${title}</h3>
                                <p class='nouvelles__type'>${type}</p>
                                    ${resume}
                        </div>
                            <div class="card-footer">
                            <img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> Par ${author}</div>
                        </div>
                    </a>


                        `;

                nouvellesList.innerHTML = htmlNouvelles;

            }						
        }
    });

}


//fetch au clic plus de nouvelles
btnPlus.addEventListener('click', function() {
    
    nbrNouvelles += 6;

    fetch(`${linkNews}/wp-json/wp/v2/nouvelles?_embed&orderby=date&order=${ordreNouvelles}&per_page=13`)
    .then(response => response.json())
    .then(data  => {

        let htmlNouvelles = "";
        let nouvellesList = document.querySelector('.nouvelles-list')
        
        console.log(nbrNouvelles);

        if (nbrNouvelles > 13) {
            btnPlus.style.display = "none";
            nbrNouvelles = 13;
        }

        for (let i = 0; i < nbrNouvelles; i++) {
            
        let link = data[i].link;
        let title = data[i].title.rendered;
        let author = data[i].acf.auteur;
        let type = data[i].acf.type;
        let date = data[i].acf.date;
        let resume = data[i].acf.resume;
        let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

        //texte se coupe si trop long pour les cartes nouvelles

        if (resume.length > 60) {
        resume = resume.substr(0, resume.lastIndexOf(' ', 100)) + ' [...]';
        }

        if (title.length > 50) {
        title = title.substr(0, title.lastIndexOf(' ', 50)) + '...';
        } 
        ///

        
        htmlNouvelles += `
        
        <a class='nouvelles__link' href='${link}'>
            <div class="nouvelles__card">
                <img src="${image}" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">${title}</h3>
                    <p class='nouvelles__type'>${type}</p>
                        ${resume}
            </div>
                <div class="card-footer">
                <img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> Par ${author}</div>
            </div>
        </a>


            `;

            nouvellesList.innerHTML = htmlNouvelles;


        }
    });

    
})
