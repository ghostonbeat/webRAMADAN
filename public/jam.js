function waktu() {
	var waktu = new Date();
	var jam = waktu.getHours();
	var menit = waktu.getMinutes();
	var detik = waktu.getSeconds();
	var ampm = jam >= 12 ? 'PM' : 'AM';

	var thn = waktu.getFullYear();

	setTimeout('waktu()', 1000);

	jam = jam % 12;
	jam = jam ? jam : 12;
	jam = jam < 10 ? '0'+jam : jam;
	menit = menit < 10 ? '0'+menit : menit;
	detik = detik < 10 ? '0'+detik : detik;

	document.getElementById('jam').innerHTML = jam;
	document.getElementById('menit').innerHTML = menit;
	document.getElementById('detik').innerHTML = detik;
	document.getElementById('ampm').innerHTML = ampm;

	document.getElementById('thn').innerHTML = thn > 2021 ? '&copy 2021 - '+thn+' by GHOST' : '&copy '+thn+' by GHOST';
}