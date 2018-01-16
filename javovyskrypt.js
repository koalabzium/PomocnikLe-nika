            
function setTheme(theme) {
                
localStorage.setItem('style', theme)
document.querySelector('#stylesheet-link').href = `${theme}.css`
            }
            
setTheme(localStorage.getItem('style') || 'styles')
        

function diffImage(img) 
{
   if(img.src.match(`images/${img.id}.jpg`)) img.src = `images/${img.id}2.jpg`;
   else img.src = `images/${img.id}.jpg`;
}

var odp="";
var i=0;
function rozpoznawacz(b){
	var tlaa = [`images/iglastetekst.jpg`, `images/zlozony.jpg`, `images/ostre.jpg`, `images/serce.jpg`, `images/postrzepione.jpg`, `images/sym.jpg`, `images/dlon.jpg`];
	if(b==3){
		i=0;
		document.getElementById("start").style.display = "none";
		document.getElementById("rozp").style.display = "inline";
		document.getElementById("wynik").style.display = "none";

	}
	if(b==2){
		
	
		document.getElementById("start").style.display = "none";
		document.getElementById("rozp").style.display = "inline";
		document.getElementById("wynik").style.display = "none";

	}
	if(b==1 && i==1){
		console.log("IGLAK");
	}
	else{
		if(b==1){
			
			odp+="t";
		} 
		if(b==0){
			odp+="n";
		}
		document.getElementById("rozp-zdj").src=tlaa[i];
	}
	i++;
	if(i==8){
		
		
		if(odp[3]=='t' && odp[4] == 't'){
			wynik(4);
		}

		if(odp[3]=='t' && odp[4]=='n'){
			wynik(10);
		}
		if(odp[6]=='t' && odp[1]=='t'){
			wynik(5);
		}
		if(odp[6]=='t' && odp[1]=='n'){
			wynik(3);
		}
		if(odp[5]=='n' && odp[3]=='n'){
			wynik(8);
		}
		if(odp=="nttnttn"){
			wynik(6);
		}
		if(odp=="nttnntn"){
			wynik(7);
		}
		if(odp=="nntnttn"){
			wynik(9);
		}
		if(odp=="nntnntn"){
			wynik(11);
		}
		if(odp=="ntnnntn"){
			wynik(13);
		}
		if(odp=="nnnnntn"){
			wynik(12);
		}


	}

}

function wyswietl(row){
	document.getElementById("opis-liscia").innerHTML = row[1];
	document.getElementById("nazwa-liscia").innerHTML = row[0];
	document.getElementById("zdj-liscia").src = row[2];
	document.getElementById("rozp").style.display="none";
	document.getElementById("wynik").style.display="inline";
}

function wynik(str){

var lol = new XMLHttpRequest();
        lol.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var row2 = JSON.parse(this.response);
                wyswietl(row2);

            }
        };
        lol.open("GET", "wynik.php?q=" + str, true);
        lol.send();

}
