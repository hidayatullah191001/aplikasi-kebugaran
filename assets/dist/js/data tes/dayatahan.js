function hitung(usia, jenis_kelamin){
	var tesmulti = document.getElementById('tesmulti').value;
	var lari16 = document.getElementById('lari16').value;
	var lari300 = document.getElementById('lari300').value;
	var lari12 = document.getElementById('lari12').value;
	var naikturun = document.getElementById('naikturun').value;

	var hslTesmulti = document.getElementById('hslTesmulti');
	var hslLari16 = document.getElementById('hslLari16');
	var hslLari300 = document.getElementById('hslLari300');
	var	hslLari12 = document.getElementById('hslLari12');
	var	hslNaikturun = document.getElementById('hslNaikturun');


	if (jenis_kelamin == 'Laki-laki') {
		if (usia >= 1 && usia <= 19) {
			if (tesmulti >=55.9) {
				hslTesmulti.value = "Supperior";
			}else if (tesmulti >= 51 && tesmulti <=55.8){
				hslTesmulti.value = "Excellent";
			}else if (tesmulti >= 45.2 && tesmulti <=50.09){
				hslTesmulti.value = "Di atas Rata-rata";
			}else if (tesmulti >= 40.5 && tesmulti <= 45.1){
				hslTesmulti.value = "Rata-rata";
			}else if (tesmulti >=35 && tesmulti <= 40.4){
				hslTesmulti.value = "Di bawah Rata-rata";
			}else if(tesmulti >= 0.1 && tesmulti <= 34.9){
				hslTesmulti.value = "Jelek";
			}
		}else if (usia >= 20 && usia <= 29) {
			if (tesmulti >= 50.2) {
				hslTesmulti.value = "Supperior";
			}else if (tesmulti >= 45.2 && tesmulti <= 50.1){
				hslTesmulti.value = "Excellent";
			}else if (tesmulti >= 43.9 && tesmulti <= 45.1){
				hslTesmulti.value = "Di atas Rata-rata";
			}else if (tesmulti >= 39.9 && tesmulti <= 43.8){
				hslTesmulti.value = "Rata-rata";
			}else if (tesmulti >=33 && tesmulti <= 39.2){
				hslTesmulti.value = "Di bawah Rata-rata";
			}else if(tesmulti >= 0.1 && tesmulti <= 32.9){
				hslTesmulti.value = "Jelek";
			}
		}

		if (usia == 16) {
			if (lari16 >= 0.1 && lari16 <= 6.13) {
				hslLari16.value = "Baik Sekali";
			}else if (lari16 >=6.14  && lari16 <= 6.5){
				hslLari16.value = "Baik";
			}else if (lari16 >=6.51 && lari16 <=7.48 ){
				hslLari16.value = "Cukup";
			}else if (lari16 >= 7.49 && lari16 <=8.34){
				hslLari16.value = "Kurang";
			}else if (lari16 >=8.35 ){
				hslLari16.value = "Kurang Sekali";
			}
		}else if (usia >= 17) {
			if (lari16 >= 0.1 && lari16 <= 6.08) {
				hslLari16.value = "Baik Sekali";
			}else if (lari16 >=6.09  && lari16 <= 6.5){
				hslLari16.value = "Baik";
			}else if (lari16 >=6.51 && lari16 <=7.48 ){
				hslLari16.value = "Cukup";
			}else if (lari16 >= 7.49 && lari16 <=8.34){
				hslLari16.value = "Kurang";
			}else if (lari16 >=8.35 ){
				hslLari16.value = "Kurang Sekali";
			}
		}

		if (lari300 >= 0.1 && lari300 <= 38.95) {
			hslLari300.value = "Baik Sekali";
		}else if (lari300 >= 38.96 && lari300 <= 44.59){
			hslLari300.value = "Baik";
		}else if (lari300 >= 44.6 && lari300 <= 49.89){
			hslLari300.value = "Cukup";
		}else if (lari300 >= 49.9 && lari300 <= 55.29){
			hslLari300.value = "Kurang";
		}else if (lari300 >= 55.3){
			hslLari300.value = "Kurang Sekali";
		}

		if (lari12 >= 2815) {
			hslLari12.value = "Baik Sekali";
		}else if (lari12 >= 2414 && lari12 <= 2814){
			hslLari12.value = "Baik";
		}else if (lari12 >= 2212 && lari12 <= 2413){
			hslLari12.value = "Cukup";
		}else if (lari12 >= 1609 && lari12 <= 2211){
			hslLari12.value = "Kurang";
		}else if (lari12 >= 1 && lari12 <= 1608){
			hslLari12.value = "Kurang Sekali";
		}

		if (naikturun >= 90) {
			hslNaikturun.value = "Baik Sekali";
		}else if (naikturun >= 80 && naikturun <= 89){
			hslNaikturun.value = "Baik";
		}else if (naikturun >= 65 && naikturun <= 79){
			hslNaikturun.value = "Cukup";
		}else if (naikturun >= 50 && naikturun <= 64){
			hslNaikturun.value = "Kurang";
		}else if (naikturun >= 1 && naikturun <= 49){
			hslNaikturun.value = "Kurang Sekali";
		}
	}else{
		if (usia >= 1 && usia <= 19) {
			if (tesmulti >= 52.6) {
				hslTesmulti.value = "Supperior";
			}else if (tesmulti >= 47.4 && tesmulti <= 52.5){
				hslTesmulti.value = "Excellent";
			}else if (tesmulti >= 43.3 && tesmulti <= 47.3){
				hslTesmulti.value = "Di atas Rata-rata";
			}else if (tesmulti >= 37.8 && tesmulti <= 43.2){
				hslTesmulti.value = "Rata-rata";
			}else if (tesmulti >= 33 && tesmulti <= 37.7){
				hslTesmulti.value = "Di bawah Rata-rata";
			}else if(tesmulti >= 0.1 && tesmulti <= 32.9){
				hslTesmulti.value = "Jelek";
			}
		}else if (usia >= 20 && usia <= 29) {
			if (tesmulti >= 50.2) {
				hslTesmulti.value = "Supperior";
			}else if (tesmulti >= 45.2 && tesmulti <= 50.1){
				hslTesmulti.value = "Excellent";
			}else if (tesmulti >= 42.4 && tesmulti <= 45.1){
				hslTesmulti.value = "Di atas Rata-rata";
			}else if (tesmulti >= 36.5 && tesmulti <= 42.3){
				hslTesmulti.value = "Rata-rata";
			}else if (tesmulti >= 31.5 && tesmulti <= 36.4){
				hslTesmulti.value = "Di bawah Rata-rata";
			}else if(tesmulti >= 0.1 && tesmulti <= 31.4){
				hslTesmulti.value = "Jelek";
			}
		}


		if (usia == 16) {
			if (lari16 >= 0.1 && lari16 <= 8.28) {
				hslLari16.value = "Baik Sekali";
			}else if (lari16 >= 8.29  && lari16 <= 9.41){
				hslLari16.value = "Baik";
			}else if (lari16 >= 9.42 && lari16 <= 11.08){
				hslLari16.value = "Cukup";
			}else if (lari16 >= 11.09 && lari16 <= 12.32){
				hslLari16.value = "Kurang";
			}else if (lari16 >= 12.33 ){
				hslLari16.value = "Kurang Sekali";
			}
		}else if (usia >= 17) {
			if (lari16 >= 0.1 && lari16 <= 8.2) {
				hslLari16.value = "Baik Sekali";
			}else if (lari16 >= 8.21  && lari16 <= 9.41){
				hslLari16.value = "Baik";
			}else if (lari16 >= 9.42 && lari16 <= 10.59){
				hslLari16.value = "Cukup";
			}else if (lari16 >= 10.60 && lari16 <= 12.3){
				hslLari16.value = "Kurang";
			}else if (lari16 >= 12.31 ){
				hslLari16.value = "Kurang Sekali";
			}
		}

		if (lari300 >= 0.1 && lari300 <= 39.29) {
			hslLari300.value = "Baik Sekali";
		}else if (lari300 >= 39.3 && lari300 <= 46.11){
			hslLari300.value = "Baik";
		}else if (lari300 >= 46.12 && lari300 <= 53.27){
			hslLari300.value = "Cukup";
		}else if (lari300 >= 53.28 && lari300 <= 60.41){
			hslLari300.value = "Kurang";
		}else if (lari300 >= 60.42){
			hslLari300.value = "Kurang Sekali";
		}

		if (lari12 >= 2654) {
			hslLari12.value = "Baik Sekali";
		}else if (lari12 >= 2253 && lari12 <= 2653){
			hslLari12.value = "Baik";
		}else if (lari12 >= 1851 && lari12 <= 2252){
			hslLari12.value = "Cukup";
		}else if (lari12 >= 1529 && lari12 <= 1850){
			hslLari12.value = "Kurang";
		}else if (lari12 >= 1 && lari12 <= 1528){
			hslLari12.value = "Kurang Sekali";
		}

		if (naikturun >= 90) {
			hslNaikturun.value = "Baik Sekali";
		}else if (naikturun >= 80 && naikturun <= 89){
			hslNaikturun.value = "Baik";
		}else if (naikturun >= 65 && naikturun <= 79){
			hslNaikturun.value = "Cukup";
		}else if (naikturun >= 50 && naikturun <= 64){
			hslNaikturun.value = "Kurang";
		}else if (naikturun >= 1 && naikturun <= 49){
			hslNaikturun.value = "Kurang Sekali";
		}
	}
}


