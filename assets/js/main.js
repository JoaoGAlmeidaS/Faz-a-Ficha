function contadorHP(quant) {
    var classValue = parseInt(document.querySelector('.vida').value);
    classValue += quant;
    //console.log(classValue); 
    if (classValue < 1) {
        document.querySelector("input.vida").value = 0;
    } else {
        document.querySelector("input.vida").value = classValue;
    }
}

function contadorSAN(quant) {
    var classValue = parseInt(document.querySelector('.san').value);
    classValue += quant;
    //console.log(classValue); 
    if (classValue < 1) {
        document.querySelector("input.san").value = 0;
    } else {
        document.querySelector("input.san").value = classValue;
    }
}

function contadorPE(quant) {
    var classValue = parseInt(document.querySelector('.pe').value);
    classValue += quant;
    //console.log(classValue); 
    if (classValue < 1) {
        document.querySelector("input.pe").value = 0;
    } else {
        document.querySelector("input.pe").value = classValue;
    }
}

function contadorMUN(quant) {
    var classValue = parseInt(document.querySelector('.mun').value);
    classValue += quant;
    //console.log(classValue); 
    if (classValue < 1) {
        document.querySelector("input.mun").value = 0;
    } else {
        document.querySelector("input.mun").value = classValue;
    }
}