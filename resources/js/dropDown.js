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
        'menu'
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
        "sidebar"
    ];
        for (let i = 0; i < listTitle.length; i++) {
            var testId = document.getElementById(listID[i]);
            e.preventDefault();
            if(e.target.id === listTitle[i]){
                e.preventDefault();
                testId.style.display = "block"
            } else{
                e.preventDefault();
                testId.style.display = "none"
            }
        }
});

