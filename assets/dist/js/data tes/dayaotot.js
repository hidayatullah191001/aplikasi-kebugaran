function hitung(usia, jenis_kelamin){
	var tesvertical = document.getElementById('tesvertical').value;
	var tesstanding = document.getElementById('tesstanding').value;
	var tesmedicine = document.getElementById('tesmedicine').value;
	var tespanjat = document.getElementById('tespanjat').value;

	var hslvertical = document.getElementById('hslvertical');
	var hslstanding = document.getElementById('hslstanding');
	var hslmedicine = document.getElementById('hslmedicine');
	var	hslpanjat = document.getElementById('hslpanjat');

	if (jenis_kelamin == "Laki-laki") {
		// Laki-laki

		// Tes Vertical
		if (usia >= 16 && usia <= 17) {
			if (tesvertical >= 25) {
				hslvertical.value = "Baik Sekali";
			}else if (tesvertical >= 23 && tesvertical <= 24) {
				hslvertical.value = "Baik";
 			}else if (tesvertical >= 19 && tesvertical <= 22) {
 				hslvertical.value = "Cukup";
 			}else if (tesvertical >= 12 && tesvertical <= 18) {
 				hslvertical.value = "Kurang";
 			}else if (tesvertical >= 1 && tesvertical <= 11) {
 				hslvertical.value = "Kurang Sekali";
 			}
		}else if (usia >= 18){
			if (tesvertical >= 26) {
				hslvertical.value = "Baik Sekali";
			}else if (tesvertical >= 24 && tesvertical <= 25) {
				hslvertical.value = "Baik";
 			}else if (tesvertical >= 19 && tesvertical <= 23) {
 				hslvertical.value = "Cukup";
 			}else if (tesvertical >= 13 && tesvertical <= 18) {
 				hslvertical.value = "Kurang";
 			}else if (tesvertical >= 1 && tesvertical <= 12) {
 				hslvertical.value = "Kurang Sekali";
 			}
		}


		// Tes Standing
		if (usia == 16) {
			if (tesstanding >= 7.9) {
				hslstanding.value = "Baik Sekali";
			}else if (tesstanding >= 7.3 && tesstanding <= 7.8) {
				hslstanding.value = "Baik";
			}else if (tesstanding >= 7 && tesstanding <= 7.2) {
				hslstanding.value = "Cukup";
			}else if (tesstanding >= 6.6 && tesstanding <= 6.9) {
				hslstanding.value = "Kurang";
			}else if (tesstanding >= 1 && tesstanding <= 6.5) {
				hslstanding.value = "Kurang Sekali";
			}
		}else if (usia >= 17) {
			if (tesstanding >= 8) {
				hslstanding.value = "Baik Sekali";
			}else if (tesstanding >= 7.6 && tesstanding <= 7.9) {
				hslstanding.value = "Baik";
			}else if (tesstanding >= 7.1 && tesstanding <= 7.5) {
				hslstanding.value = "Cukup";
			}else if (tesstanding >= 6.6 && tesstanding <= 7) {
				hslstanding.value = "Kurang";
			}else if (tesstanding >= 1 && tesstanding <= 6.5) {
				hslstanding.value = "Kurang Sekali";
			}
		}

		// Tes Medicine

		if (tesmedicine >= 7.92) {
			hslmedicine.value = "Baik Sekali";
		}else if (tesmedicine >= 6.71 && tesmedicine <= 7.91) {
			hslmedicine.value = "Baik";
		}else if (tesmedicine >= 4.26 && tesmedicine <= 6.7) {
			hslmedicine.value = "Sedang";
		}else if (tesmedicine >= 3.05 && tesmedicine <= 4.25) {
			hslmedicine.value = "Kurang";
		}else if (tesmedicine >= 1 && tesmedicine <= 3.04) {
			hslmedicine.value = "Kurang Sekali";
		}


		// Tes Panjat
		if (tespanjat >= 66) {
			hslpanjat.value = "Baik Sekali";
		}else if (tespanjat >= 62.2 && tespanjat <= 65.9) {
			hslpanjat.value = "Baik";
		}else if (tespanjat >= 48.3 && tespanjat <= 62.1) {
			hslpanjat.value = "Cukup";
		}else if (tespanjat >= 38.7 && tespanjat <= 48.2) {
			hslpanjat.value = "Kurang";
		}else if (tespanjat >= 1 && tespanjat <= 38.7) {
			hslpanjat.value = "Kurang Sekali";
		}
	}else{
		// Perempuan

		// Tes Vertical
		if (usia >= 16 && usia <= 17) {
			if (tesvertical >= 17) {
				hslvertical.value = "Baik Sekali";
			}else if (tesvertical >= 15 && tesvertical <= 16) {
				hslvertical.value = "Baik";
 			}else if (tesvertical >= 13 && tesvertical <= 14) {
 				hslvertical.value = "Cukup";
 			}else if (tesvertical >= 8 && tesvertical <= 12) {
 				hslvertical.value = "Kurang";
 			}else if (tesvertical >= 1 && tesvertical <= 7) {
 				hslvertical.value = "Kurang Sekali";
 			}
		}else if (usia >= 18){
			if (tesvertical >= 14) {
				hslvertical.value = "Baik Sekali";
			}else if (tesvertical >= 14) {
				hslvertical.value = "Baik";
 			}else if (tesvertical >= 10 && tesvertical <= 12) {
 				hslvertical.value = "Cukup";
 			}else if (tesvertical >= 6 && tesvertical <= 9) {
 				hslvertical.value = "Kurang";
 			}else if (tesvertical >= 1 && tesvertical <= 5) {
 				hslvertical.value = "Kurang Sekali";
 			}
		}


		// Tes Standing
		if (usia == 16) {
			if (tesstanding >= 6) {
				hslstanding.value = "Baik Sekali";
			}else if (tesstanding >= 5.6 && tesstanding <= 5.9) {
				hslstanding.value = "Baik";
			}else if (tesstanding >= 5.2 && tesstanding <= 5.5) {
				hslstanding.value = "Cukup";
			}else if (tesstanding >= 4.9 && tesstanding <= 5.1) {
				hslstanding.value = "Kurang";
			}else if (tesstanding >= 1 && tesstanding <= 4.8) {
				hslstanding.value = "Kurang Sekali";
			}
		}else if (usia >= 17) {
			if (tesstanding >= 6.3) {
				hslstanding.value = "Baik Sekali";
			}else if (tesstanding >= 6 && tesstanding <= 6.2) {
				hslstanding.value = "Baik";
			}else if (tesstanding >= 5.4 && tesstanding <= 5.9) {
				hslstanding.value = "Cukup";
			}else if (tesstanding >= 5 && tesstanding <= 5.3) {
				hslstanding.value = "Kurang";
			}else if (tesstanding >= 1 && tesstanding <= 4.9) {
				hslstanding.value = "Kurang Sekali";
			}
		}

		// Tes Medicine

		if (tesmedicine >= 4.75) {
			hslmedicine.value = "Baik Sekali";
		}else if (tesmedicine >= 3.96 && tesmedicine <= 4.74) {
			hslmedicine.value = "Baik";
		}else if (tesmedicine >= 2.44 && tesmedicine <= 3.95) {
			hslmedicine.value = "Sedang";
		}else if (tesmedicine >= 1.52 && tesmedicine <= 2.43) {
			hslmedicine.value = "Kurang";
		}else if (tesmedicine >= 1 && tesmedicine <= 1.51) {
			hslmedicine.value = "Kurang Sekali";
		}


		// Tes Panjat
		if (tespanjat >= 66) {
			hslpanjat.value = "Baik Sekali";
		}else if (tespanjat >= 62.2 && tespanjat <= 65.9) {
			hslpanjat.value = "Baik";
		}else if (tespanjat >= 48.3 && tespanjat <= 62.1) {
			hslpanjat.value = "Cukup";
		}else if (tespanjat >= 38.7 && tespanjat <= 48.2) {
			hslpanjat.value = "Kurang";
		}else if (tespanjat >= 1 && tespanjat <= 38.7) {
			hslpanjat.value = "Kurang Sekali";
		}
	}
}