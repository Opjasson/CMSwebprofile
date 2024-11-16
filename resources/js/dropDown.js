document.addEventListener("click", function (e) {
    
    var listTitle = [
        "Konten",
        "Akademik",
        "Data",
        "Tampilan",
        "Exclusive",
        "PPDB",
        "SIMPEN",
        "Pengaturan",
        "user",
        
    ];
    var listID = [
        "listKonten",
        "listAkademik",
        "listData",
        "listTampilan",
        "listExclusive",
        "listPPDB",
        "listSIMPEN",
        "listPengaturan",
        "listUser",
        
    ];
        for (let i = 0; i < listTitle.length; i++) {
            var testId = document.getElementById(listID[i]);
            e.preventDefault();
            if(e.target.id === listTitle[i]){
                e.preventDefault();
                console.log("hay")
                testId.style.display = "block"
            } else{
                e.preventDefault();
                testId.style.display = "none"
            }
        }
});

window.menu = function() {
    const side = document.getElementById('sidebar');
    const scan = side.classList.contains('hidden')
    if(scan){
        side.classList.remove('hidden')
    }else {
        side.classList.add('hidden')
    }
}

window.user = function() {
    const side = document.getElementById('listUser2');
    
    if(side.style.display === "none"){
        side.style.display = "block"
    }else {
        side.style.display = "none"
    }
}