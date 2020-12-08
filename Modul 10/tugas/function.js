var data = [
    "Buku Tulis",
    "Pensil",
    "Spidol"
];

function tampilBarang(){
    var listBarang = document.getElementById("list_Barang");    
    listBarang.innerHTML = "";
    
    for(let i=0; i<data.length; i++){
        var edit_button = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var hapus_button = "<a href='#' onclick='delete("+i+")'>Hapus</a>";

        listBarang.innerHTML += "<li>" + data[i] + " ["+edit_button + " | "+ hapus_button +"]</li>";        
    }
}

function tambah(){
    var input = document.querySelector("input[name=barang]");
    data.push(input.value);
    tampilBarang();
}


function edit(id){
    var newBarang = prompt("Nama baru", data[id]);
    data[id] = newBarang;
    tampilBarang();
}

function hapus(id){
    data.splice(id, 1);
    tampilBarang();
}

tampilBarang();