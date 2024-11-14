// var test1 = document.getElementsByClassName("dropDown");
// for(let i = 0; i < test.length; i++){
//     console.log(test[i].id)
//     // window.test[i].id = function () {
//     //     const test1 = document.getElementById(`${test[i].id}`);
//     //     if (test1.style.display === "none") {
//     //         test1.style.display = "block";
//     //     } else {
//     //         test1.style.display = "none";
//     //     }
//     // };
// }

// window.dropDown2 = function () {
//     const test = document.getElementById("listAkademik");
//     console.log(test)
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

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
    ];
        for (let i = 0; i < listTitle.length; i++) {
            var testId = document.getElementById(listID[i]);
            e.preventDefault();
            if(e.target.id === listTitle[i]){
                e.preventDefault();
                testId.style.display = "block"
                console.log(listID[i])
            } else{
                e.preventDefault();
                testId.style.display = "none"
            }
        }
});
// window.dropDown3 = function () {
//     const test = document.getElementById("listData");

//     console.log(test);
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

// window.dropDown4 = function () {
//     const test = document.getElementById("listTampilan");

//     console.log(test);
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

// window.dropDown5 = function () {
//     const test = document.getElementById("listExclusive");

//     console.log(test);
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

// window.dropDown6 = function () {
//     const test = document.getElementById("listPPDB");

//     console.log(test);
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

// window.dropDown7 = function () {
//     const test = document.getElementById("listSIMPEN");

//     console.log(test);
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

// window.dropDown8 = function () {
//     const test = document.getElementById("listPengaturan");

//     console.log(test);
//     if (test.style.display === "none") {
//         test.style.display = "block";
//     } else {
//         test.style.display = "none";
//     }
// };

// window.dropDown9 = function () {
//     const user = document.getElementById("user");
//     console.log(user.classList);
//     const listUser = document.getElementById("listUser");
//     if(listUser.style.display === "none"){
//         listUser.style.display = "block"
//     }else{
//         listUser.style.display ="none"
//     }
// };

document.addEventListener("click", function (e) {
    console.log(e);
});
