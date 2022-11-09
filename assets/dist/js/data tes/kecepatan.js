function hitung(usia, jenis_kelamin){
	var teslari30 = document.getElementById('teslari30').value;
	var teslari50 = document.getElementById('teslari50').value;

	var hsllari30 = document.getElementById('hsllari30');
	var hsllari50 = document.getElementById('hsllari50');
	

	if (jenis_kelamin == 'Laki-laki') {
		//Laki-laki

		if (teslari30 >= 0.1 && teslari30 <= 3.91) {
			hsllari30.value = "Baik Sekali";
		}else if (teslari30 >= 3.92 && teslari30 <= 4.34) {
			hsllari30.value = "Baik";
		}else if (teslari30 >= 4.35 && teslari30 <= 4.72) {
			hsllari30.value = "Cukup";
		}else if (teslari30 >= 4.73 && teslari30 <= 5.11) {
			hsllari30.value = "Kurang";
		}else if (teslari30 >= 5.12) {
			hsllari30.value = "Kurang Sekali";
		}


		if (teslari50 >= 0.1 && teslari50 <= 6.7) {
			hsllari50.value = "Baik Sekali";
		}else if (teslari50 >= 6.8 && teslari50 <= 7.6) {
			hsllari50.value = "Baik";
		}else if (teslari50 >= 7.7 && teslari50 <= 8.7) {
			hsllari50.value = "Cukup";
		}else if (teslari50 >= 8.8 && teslari50 <= 10.3) {
			hsllari50.value = "Kurang";
		}else if (teslari50 >= 10.4) {
			hsllari50.value = "Kurang Sekali";
		}
	}else{
		//Perempuan

		if (teslari30 >= 0.1 && teslari30 <= 4.5) {
			hsllari30.value = "Baik Sekali";
		}else if (teslari30 >= 4.51 && teslari30 <= 4.96) {
			hsllari30.value = "Baik";
		}else if (teslari30 >= 4.97 && teslari30 <= 5.4) {
			hsllari30.value = "Cukup";
		}else if (teslari30 >= 5.41 && teslari30 <= 5.86) {
			hsllari30.value = "Kurang";
		}else if (teslari30 >= 5.87) {
			hsllari30.value = "Kurang Sekali";
		}


		if (teslari50 >= 0.1 && teslari50 <= 7.7) {
			hsllari50.value = "Baik Sekali";
		}else if (teslari50 >= 7.8 && teslari50 <= 8.7) {
			hsllari50.value = "Baik";
		}else if (teslari50 >= 8.8 && teslari50 <= 9.9) {
			hsllari50.value = "Cukup";
		}else if (teslari50 >= 10 && teslari50 <= 11.9) {
			hsllari50.value = "Kurang";
		}else if (teslari50 >= 12) {
			hsllari50.value = "Kurang Sekali";
		}
	}
}