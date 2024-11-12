window.dropDown1 = function () {
    const test = document.getElementById('listKonten');

    console.log(test);
    if(test.style.display === "none"){
        test.style.display = "block"
    }else {
        test.style.display = "none"
    }
    
}

window.dropDown2 = function () {
    const test = document.getElementById('listAkademik');

    console.log(test);
    if(test.style.display === "none"){
        test.style.display = "block"
    }else {
        test.style.display = "none"
    }
    
}
