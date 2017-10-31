// clock
var tgl,
  j,
  m,
  d,
  aturwaktu;

function iniswaktu() {
  tgl = new Date();
  j = tgl.getHours();
  m = tgl.getMinutes();
  d = tgl.getSeconds();
  waktu();
};

function waktu() {
  d++;
  if (d == 60) {
    d = 0;
    m++;
    if (m == 60) {
      m = 0;
      j++;
      if (j == 24) {
        j = 0;
      }
    }
  }
  $('detik', d);
  $('menit', m);
  $('jam', j);
  aturwaktu = setTimeout(waktu, 1000);
};

function $(id, val) {
  if (val < 10) {
    val = '0' + val;
  }
  document.getElementById(id).innerHTML = val;
};

window.onload = iniswaktu;
