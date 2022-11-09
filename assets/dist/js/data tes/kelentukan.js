function hitung(usia, jenis_kelamin){
	var tessit = document.getElementById('tessit').value;
	var tesstandingtrunk = document.getElementById('tesstandingtrunk').value;

	var hslsit = document.getElementById('hslsit');
	var hslstandingtrunk = document.getElementById('hslstandingtrunk');

	if (jenis_kelamin == "Laki-laki") {
		
		if(usia == 16){
			if(tessit >= 19){
				hslsit.value = "Baik Sekali";
			}else if (tessit >= 17 && tessit <= 18.9) {
				hslsit.value = "Baik";
			}else if (tessit >= 15 && tessit <= 16.9) {
				hslsit.value = "Cukup";
			}else if (tessit >= 13 && tessit <= 14.9) {
				hslsit.value = "Kurang";
			}else if (tessit >= 1 && tessit <= 12.9) {
				hslsit.value = "Kurang Sekali";
			}
		}

		if (usia == 17) {
			if(tessit >= 19.5){
				hslsit.value = "Baik Sekali";
			}else if (tessit >= 17.5 && tessit <= 19.4) {
				hslsit.value = "Baik";
			}else if (tessit >= 15.5 && tessit <= 17.4) {
				hslsit.value = "Cukup";
			}else if (tessit >= 13 && tessit <= 15.4) {
				hslsit.value = "Kurang";
			}else if (tessit >= 1 && tessit <= 12.9) {
				hslsit.value = "Kurang Sekali";
			}
		}

		if (usia >= 18) {
			if(tessit >= 19.5){
				hslsit.value = "Baik Sekali";
			}else if (tessit >= 17.5 && tessit <= 19.4) {
				hslsit.value = "Baik";
			}else if (tessit >= 15.5 && tessit <= 17.4) {
				hslsit.value = "Cukup";
			}else if (tessit >= 13 && tessit <= 15.4) {
				hslsit.value = "Kurang";
			}else if (tessit >= 1 && tessit <= 12.9) {
				hslsit.value = "Kurang Sekali";
			}
		}

		if (tesstandingtrunk >= 21) {
			hslstandingtrunk.value = "Baik Sekali";
		}else if (tesstandingtrunk >= 17 && tesstandingtrunk <= 20) {
			hslstandingtrunk.value = "Baik";
		}else if (tesstandingtrunk >= 11 && tesstandingtrunk <= 16) {
			hslstandingtrunk.value = "Sedang";
		}else if (tesstandingtrunk >= 5 && tesstandingtrunk <= 10) {
			hslstandingtrunk.value = "Kurang";
		}else if (tesstandingtrunk >= 1 && tesstandingtrunk <=5) {
			hslstandingtrunk.value = "Kurang Sekali";
		}

	}else{

		if(usia == 16){
			if(tessit >= 20.5){
				hslsit.value = "Baik Sekali";
			}else if (tessit >= 19 && tessit <= 20.4) {
				hslsit.value = "Baik";
			}else if (tessit >= 17.5 && tessit <= 18.9) {
				hslsit.value = "Cukup";
			}else if (tessit >= 16 && tessit <= 17.4) {
				hslsit.value = "Kurang";
			}else if (tessit >= 1 && tessit <= 15.9) {
				hslsit.value = "Kurang Sekali";
			}
		}

		if (usia == 17) {
			if(tessit >= 20.5){
				hslsit.value = "Baik Sekali";
			}else if (tessit >= 19 && tessit <= 20.4) {
				hslsit.value = "Baik";
			}else if (tessit >= 18 && tessit <= 18.9) {
				hslsit.value = "Cukup";
			}else if (tessit >= 15.5 && tessit <= 17.9) {
				hslsit.value = "Kurang";
			}else if (tessit >= 1 && tessit <= 15.4) {
				hslsit.value = "Kurang Sekali";
			}
		}

		if (usia >= 18) {
			if(tessit >= 20.5){
				hslsit.value = "Baik Sekali";
			}else if (tessit >= 19 && tessit <= 20.4) {
				hslsit.value = "Baik";
			}else if (tessit >= 18 && tessit <= 18.9) {
				hslsit.value = "Cukup";
			}else if (tessit >= 15.5 && tessit <= 17.9) {
				hslsit.value = "Kurang";
			}else if (tessit >= 1 && tessit <= 15.4) {
				hslsit.value = "Kurang Sekali";
			}
		}

		if (tesstandingtrunk >= 22) {
			hslstandingtrunk.value = "Baik Sekali";
		}else if (tesstandingtrunk >= 18 && tesstandingtrunk <= 21) {
			hslstandingtrunk.value = "Baik";
		}else if (tesstandingtrunk >= 12 && tesstandingtrunk <= 17) {
			hslstandingtrunk.value = "Sedang";
		}else if (tesstandingtrunk >= 8 && tesstandingtrunk <= 11) {
			hslstandingtrunk.value = "Kurang";
		}else if (tesstandingtrunk >= 1 && tesstandingtrunk <= 7) {
			hslstandingtrunk.value = "Kurang Sekali";
		}
	}
}