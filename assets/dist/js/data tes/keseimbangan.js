function hitung(usia, jenis_kelamin){
	var tesstork = document.getElementById('tesstork').value;
	var hslstork = document.getElementById('hslstork');

	if (jenis_kelamin == 'Laki-laki') {

		if (tesstork >= 51) {
			hslstork.value = "Baik Sekali";
		}else if (tesstork >= 37 && tesstork <= 50) {
			hslstork.value = "Baik";
		}else if (tesstork >= 15 && tesstork <= 36) {
			hslstork.value = "Sedang";
		}else if (tesstork >= 5 && tesstork <= 14) {
			hslstork.value = "Kurang";
		}else if (tesstork >= 1 && tesstork <= 4) {
			hslstork.value = "Kurang Sekali";
		}

	}else {

		if (tesstork >= 51) {
			hslstork.value = "Baik Sekali";
		}else if (tesstork >= 37 && tesstork <= 50) {
			hslstork.value = "Baik";
		}else if (tesstork >= 15 && tesstork <= 36) {
			hslstork.value = "Sedang";
		}else if (tesstork >= 5 && tesstork <= 14) {
			hslstork.value = "Kurang";
		}else if (tesstork >= 1 && tesstork <= 4) {
			hslstork.value = "Kurang Sekali";
		}
		
	}
}