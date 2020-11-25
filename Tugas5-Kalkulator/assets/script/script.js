const bil1 = document.getElementById("bil1");
const bil2 = document.getElementById("bil2");
const hasil = document.getElementById("hasil");
const tambah = document.getElementById("tambah");
const kurang = document.getElementById("kurang");
const kali = document.getElementById("kali");
const bagi = document.getElementById("bagi");
const clear = document.getElementById("clear");

tambah.onclick = function(){
    let tempHasil = parseFloat(bil1.value)+parseFloat(bil2.value);
    hasil.value=tempHasil;
}
kurang.onclick = function(){
    let tempHasil = parseFloat(bil1.value)-parseFloat(bil2.value);
    hasil.value=tempHasil;
}
kali.onclick = function(){
    let tempHasil = parseFloat(bil1.value)*parseFloat(bil2.value);
    hasil.value=tempHasil;
}
bagi.onclick = function(){
    let tempHasil = parseFloat(bil1.value)/parseFloat(bil2.value);
    hasil.value=tempHasil;
}


clear.onclick = function(){
    bil1.value='';
    bil2.value='';
    hasil.value='';
}
