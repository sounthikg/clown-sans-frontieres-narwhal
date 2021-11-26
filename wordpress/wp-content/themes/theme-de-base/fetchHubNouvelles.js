function getnouvelles(param){

	fetch(`/wp-json/wp/v2/news?_embed&per_page=13&order=date&order=${param}`)
	.then(response => response.json())
	.then(data => { 
		console.log(data);
		let html2 = "";
		let fetchDivHub = document.querySelector('#fetch-api-cards-hub')

		for (let i = 0; i < `${clickplus}`; i++) {

			let link = data[i].link;
			let title = data[i].title.rendered;
			let auteur = data[i].acf.auteur;
			let categorie = data[i].acf.categorie;
			let date = data[i].acf.date;
			let resume = data[i].acf.resume;
			let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

			html2 += 
				`<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
					<div class="card card1">
						<div class="card-body">
							<h2 class="card-title">${title}</h2>
							<img src="${image}" class="card-img-top"/>
							<p>${resume}</p>
							<div class="card-footer"><a href='${link}'><button class="hero-button">En Savoir Plus</button></a></div>
						</div>
					</div>
				</div>`;

			fetchDivHub.innerHTML = html2;
		}
	});
}

//-  ----------------------------------------------------------------------------
getnouvelles("desc")

orderby.addEventListener("change", function() {
	var getFunction2 = this.value
	getnouvelles(getFunction2)
});

var clickplus = 6;
let btnNews= document.querySelector('#afficher-plus-nouvelles');
btnNews.addEventListener('click', function() {

	clickplus += 6;

	if(clickplus > 13)
		clickplus = 13;

	fetch(`/wp-json/wp/v2/news?_embed&per_page=${clickplus}&order=date&order=desc`)
	.then(response => response.json())
	.then(data => {
		let html2 = "";
		let fetchDivHub = document.querySelector('#fetch-api-cards-hub')

		for (let i = 0; i < `${clickplus}`; i++) {

			let link = data[i].link;
			let title = data[i].title.rendered;
			let auteur = data[i].acf.auteur;
			let categorie = data[i].acf.categorie;
			let date = data[i].acf.date;
			let resume = data[i].acf.resume;
			let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

			html2 += 
				`<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
					<div class="card card1">
						<div class="card-body">
							<h2 class="card-title">${title}</h2>
							<img src="${image}" class="card-img-top"/>
							<p>${resume}</p>
							<div class="card-footer"><a href='${link}'><button class="hero-button">En Savoir Plus</button></a></div>
						</div>
					</div>
				</div>`;

			fetchDivHub.innerHTML = html2;
		}

		if (clickplus > 12) btnNews.style.display = "none";
		console.log(clickplus);
	});
	});