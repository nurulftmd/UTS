function tambah()
{var bil1 = parseFloat(document.tools.nilai1.value);
var bil2 = parseFloat(document.tools.nilai2.value);
var hasil= bil1 + bil2;
document.tools.hasil.value= hasil;}

function kurang()
{var bil1 = parseFloat(document.tools.nilai1.value);
var bil2 = parseFloat(document.tools.nilai2.value);
var hasil = bil1 - bil2;
document.tools.hasil.value= hasil;}


function bagi()
{var bil1 = parseFloat(document.tools.nilai1.value);
var bil2 = parseFloat(document.tools.nilai2.value);
var hasil= bil1 / bil2;
document.tools.hasil.value= hasil;}

function kali()
{var bil1 = parseFloat(document.tools.nilai1.value);
var bil2 = parseFloat(document.tools.nilai2.value);
var hasil= bil1 * bil2;
document.tools.hasil.value= hasil;}

function mod()
{var bil1 = parseFloat(document.tools.nilai1.value);
var bil2 = parseFloat(document.tools.nilai2.value);
var hasil= bil1 % bil2;
document.tools.hasil.value= hasil;
}
