function hitung(usia, jenis_kelamin){
	var tespushup = document.getElementById('tespushup').value;
	var tessitup = document.getElementById('tessitup').value;
	var tespullup = document.getElementById('tespullup').value;
	var tesgtka = document.getElementById('tesgtka').value;
	var tesgtki = document.getElementById('tesgtki').value;
	var testarikdorong = document.getElementById('testarikdorong').value;
	var tespunggung = document.getElementById('tespunggung').value;
	var testungkai = document.getElementById('testungkai').value;
	var teswallsquat = document.getElementById('teswallsquat').value;

	var hslpushup = document.getElementById('hslpushup');
	var hslsitup = document.getElementById('hslsitup');
	var hslpullup = document.getElementById('hslpullup');
	var hslgtka = document.getElementById('hslgtka');
	var hslgtki = document.getElementById('hslgtki');
	var hsltarikdorong = document.getElementById('hsltarikdorong');
	var hslpunggung = document.getElementById('hslpunggung');
	var hsltungkai = document.getElementById('hsltungkai');
	var hslwallsquat = document.getElementById('hslwallsquat');

	if (jenis_kelamin == 'Laki-laki') {
		if (usia >= 16 && usia<=19) {
			if (tespushup >= 56) {
				hslpushup.value = "Sangat Baik";
			}else if(tespushup >=47 && tespushup<= 55){
				hslpushup.value = "Baik";
			}else if(tespushup >=35 && tespushup <= 46){
				hslpushup.value = "Cukup";
			}else if(tespushup >= 19 && tespushup <= 34){
				hslpushup.value = "Sedang";
			}else if(tespushup >= 11 && tespushup <= 18){
				hslpushup.value = "Kurang";
			}else if (tespushup >= 1 && tespushup <= 10) {
				hslpushup.value = "Kurang Sekali";
			}
		}else if (usia >= 20 && usia <=29){
			if (tespushup >= 47) {
				hslpushup.value = "Sangat Baik";
			}else if(tespushup >=39 && tespushup<= 46){
				hslpushup.value = "Baik";
			}else if(tespushup >=30 && tespushup <= 38){
				hslpushup.value = "Cukup";
			}else if(tespushup >= 17 && tespushup <= 29){
				hslpushup.value = "Sedang";
			}else if(tespushup >= 10 && tespushup <= 16){
				hslpushup.value = "Kurang";
			}else if (tespushup >= 1 && tespushup <= 9) {
				hslpushup.value = "Kurang Sekali";
			}
		}

		// Sit Up
		if (usia == 16) {
			if (tessitup > 55) {
				hslsitup.value = "Sangat Baik";
			}else if(tessitup >=49 && tessitup<= 54){
				hslsitup.value = "Baik";
			}else if(tessitup >=43 && tessitup <= 48){
				hslsitup.value = "Cukup";
			}else if(tessitup >= 38 && tessitup <= 42){
				hslsitup.value = "Kurang";
			}else if(tessitup >= 32 && tessitup <= 37){
				hslsitup.value = "Kurang Sekali";
			}else if (tessitup >= 1 && tessitup <= 31) {
				hslsitup.value = "Buruk"
			}
		}else if (usia == 17) {
			if (tessitup > 56) {
				hslsitup.value = "Sangat Baik";
			}else if(tessitup >=50 && tessitup<= 55){
				hslsitup.value = "Baik";
			}else if(tessitup >=43 && tessitup <= 49){
				hslsitup.value = "Cukup";
			}else if(tessitup >= 37 && tessitup <= 42){
				hslsitup.value = "Kurang";
			}else if(tessitup >= 31 && tessitup <= 36){
				hslsitup.value = "Kurang Sekali";
			}else if (tessitup >= 1 && tessitup <= 30) {
				hslsitup.value = "Buruk"
			}
		}else if (usia >= 18) {
			if (tessitup > 54) {
				hslsitup.value = "Sangat Baik";
			}else if(tessitup >=50 && tessitup<= 53){
				hslsitup.value = "Baik";
			}else if(tessitup >=43 && tessitup <= 49){
				hslsitup.value = "Cukup";
			}else if(tessitup >= 36 && tessitup <= 42){
				hslsitup.value = "Kurang";
			}else if(tessitup >= 31 && tessitup <= 35){
				hslsitup.value = "Kurang Sekali";
			}else if (tessitup >= 1 && tessitup <= 30) {
				hslsitup.value = "Buruk"
			}
		}

		// Pull Up
		if (usia == 16) {
			if (tespullup > 14) {
				hslpullup.value = "Sangat Baik";
			}else if(tespullup >=12 && tespullup<= 13){
				hslpullup.value = "Baik";
			}else if(tespullup >= 9 && tespullup <= 11){
				hslpullup.value = "Cukup";
			}else if(tespullup >= 6 && tespullup <= 8){
				hslpullup.value = "Kurang";
			}else if(tespullup >= 1 && tespullup <= 5){
				hslpullup.value = "Kurang Sekali";
			}
		}else if (usia == 17) {
			if (tespullup > 15) {
				hslpullup.value = "Sangat Baik";
			}else if(tespullup >= 12 && tespullup<= 14){
				hslpullup.value = "Baik";
			}else if(tespullup >= 9 && tespullup <= 11){
				hslpullup.value = "Cukup";
			}else if(tespullup >= 5 && tespullup <= 8){
				hslpullup.value = "Kurang";
			}else if(tespullup >= 1 && tespullup <= 4){
				hslpullup.value = "Kurang Sekali";
			}
		}else if (usia >= 18) {
			if (tespullup > 16) {
				hslpullup.value = "Sangat Baik";
			}else if(tespullup >=13 && tespullup<= 15){
				hslpullup.value = "Baik";
			}else if(tespullup >=10 && tespullup <= 12){
				hslpullup.value = "Cukup";
			}else if(tespullup >= 6 && tespullup <= 8){
				hslpullup.value = "Kurang";
			}else if(tespullup >= 1 && tespullup <= 5){
				hslpullup.value = "Kurang Sekali";
			}
		}

		//GTKA
		if (tesgtka >= 62) {
			hslgtka.value = "Baik";
		}else if (tesgtka >= 48 && tesgtka <=61) {
			hslgtka.value = "Sedang";
		}else if (tesgtka >=1 && tesgtka <=47){
			hslgtka.value = "Kurang";
		}

		//GTKI
		if (tesgtki >= 56) {
			hslgtki.value = "Baik";
		}else if (tesgtki >= 43 && tesgtki <=55) {
			hslgtki.value = "Sedang";
		}else if (tesgtki >= 1 && tesgtki <= 42){
			hslgtki.value = "Kurang";
		}

		//Tarik dan Dorong

		if (testarikdorong >= 52) {
			hsltarikdorong.value = "Baik";
		}else if(testarikdorong >=40 && testarikdorong <= 51){
			hsltarikdorong.value = "Sedang";
		}else if(testarikdorong >= 1 && testarikdorong <= 39){
			hsltarikdorong.value = "Kurang";
		}


		// Punggung

		if (tespunggung >= 177) {
			hslpunggung.value = "Baik";
		}else if (tespunggung >= 126 && tespunggung <=  176) {
			hslpunggung.value = "Sedang";
		}else if (tespunggung >= 1 && tespunggung <= 125) {
			hslpunggung.value = "Kurang";
		}

		//Tungkai

		if (testungkai >= 214) {
			hsltungkai.value = "Baik";
		}else if (testungkai >= 160 && testungkai <= 213){
			hsltungkai.value = "Sedang";
		}else if (testungkai >= 1 && testungkai <= 159) {
			hsltungkai.value = "Kurang";
		}

		//Wall Squat

		if (teswallsquat >= 102) {
			hslwallsquat.value = "Baik";
		}else if (teswallsquat >= 76 && teswallsquat <= 101) {
			hslwallsquat.value = "Cukup";
		}else if (teswallsquat >= 58 && teswallsquat <= 75) {
			hslwallsquat.value = "Sedang";
		}else if (teswallsquat >= 30 && teswallsquat <= 57) {
			hslwallsquat.value = "Kurang";
		}else if (teswallsquat >= 1 && teswallsquat <= 29) {
			hslwallsquat.value = "Buruk";
		}
	}else{
		if (usia >= 16 && usia<=19) {
			if (tespushup >= 35) {
				hslpushup.value = "Sangat Baik";
			}else if(tespushup >=27 && tespushup<= 34){
				hslpushup.value = "Baik";
			}else if(tespushup >=21 && tespushup <= 26){
				hslpushup.value = "Cukup";
			}else if(tespushup >= 11 && tespushup <= 20){
				hslpushup.value = "Sedang";
			}else if(tespushup >= 6 && tespushup <= 10){
				hslpushup.value = "Kurang";
			}else if (tespushup >= 2 && tespushup <= 5) {
				hslpushup.value = "Kurang Sekali";
			}
		}else if (usia >= 20 && usia <=29){
			if (tespushup >= 36) {
				hslpushup.value = "Sangat Baik";
			}else if(tespushup >= 30 && tespushup<= 35){
				hslpushup.value = "Baik";
			}else if(tespushup >= 23 && tespushup <= 29){
				hslpushup.value = "Cukup";
			}else if(tespushup >= 12 && tespushup <= 22){
				hslpushup.value = "Sedang";
			}else if(tespushup >= 7 && tespushup <= 11){
				hslpushup.value = "Kurang";
			}else if (tespushup >= 2 && tespushup <= 6) {
				hslpushup.value = "Kurang Sekali";
			}
		}

		// Sit Up
		if (usia == 16) {
			if (tessitup >= 49) {
				hslsitup.value = "Sangat Baik";
			}else if(tessitup >= 40 && tessitup<= 48){
				hslsitup.value = "Baik";
			}else if(tessitup >= 35 && tessitup <= 39){
				hslsitup.value = "Cukup";
			}else if(tessitup >= 30 && tessitup <= 34){
				hslsitup.value = "Kurang";
			}else if(tessitup >= 23 && tessitup <= 29){
				hslsitup.value = "Kurang Sekali";
			}else if (tessitup >= 1 && tessitup <= 22) {
				hslsitup.value = "Buruk"
			}
		}else if (usia == 17) {
			if (tessitup >= 47) {
				hslsitup.value = "Sangat Baik";
			}else if(tessitup >= 40 && tessitup<= 46){
				hslsitup.value = "Baik";
			}else if(tessitup >= 36 && tessitup <= 39){
				hslsitup.value = "Cukup";
			}else if(tessitup >= 30 && tessitup <= 35){
				hslsitup.value = "Kurang";
			}else if(tessitup >= 24 && tessitup <= 29){
				hslsitup.value = "Kurang Sekali";
			}else if (tessitup >= 1 && tessitup <= 23) {
				hslsitup.value = "Buruk"
			}
		}else if (usia >= 18) {
			if (tessitup >= 47) {
				hslsitup.value = "Sangat Baik";
			}else if(tessitup >= 40 && tessitup <= 46){
				hslsitup.value = "Baik";
			}else if(tessitup >= 35 && tessitup <= 39){
				hslsitup.value = "Cukup";
			}else if(tessitup >= 30 && tessitup <= 34){
				hslsitup.value = "Kurang";
			}else if(tessitup >= 24 && tessitup <= 29){
				hslsitup.value = "Kurang Sekali";
			}else if (tessitup >= 1 && tessitup <= 23) {
				hslsitup.value = "Buruk"
			}
		}

		// Pull Up (Yang perempuan datanya masih sama dengan laki-laki)
		if (usia == 16) {
			if (tespullup > 14) {
				hslpullup.value = "Sangat Baik";
			}else if(tespullup >=12 && tespullup<= 13){
				hslpullup.value = "Baik";
			}else if(tespullup >= 9 && tespullup <= 11){
				hslpullup.value = "Cukup";
			}else if(tespullup >= 6 && tespullup <= 8){
				hslpullup.value = "Kurang";
			}else if(tespullup >= 1 && tespullup <= 5){
				hslpullup.value = "Kurang Sekali";
			}
		}else if (usia == 17) {
			if (tespullup > 15) {
				hslpullup.value = "Sangat Baik";
			}else if(tespullup >= 12 && tespullup<= 14){
				hslpullup.value = "Baik";
			}else if(tespullup >= 9 && tespullup <= 11){
				hslpullup.value = "Cukup";
			}else if(tespullup >= 5 && tespullup <= 8){
				hslpullup.value = "Kurang";
			}else if(tespullup >= 1 && tespullup <= 4){
				hslpullup.value = "Kurang Sekali";
			}
		}else if (usia >= 18) {
			if (tespullup > 16) {
				hslpullup.value = "Sangat Baik";
			}else if(tespullup >=13 && tespullup<= 15){
				hslpullup.value = "Baik";
			}else if(tespullup >=10 && tespullup <= 12){
				hslpullup.value = "Cukup";
			}else if(tespullup >= 6 && tespullup <= 8){
				hslpullup.value = "Kurang";
			}else if(tespullup >= 1 && tespullup <= 5){
				hslpullup.value = "Kurang Sekali";
			}
		}

		//GTKA
		if (tesgtka >= 38) {
			hslgtka.value = "Baik";
		}else if (tesgtka >= 25 && tesgtka <=37) {
			hslgtka.value = "Sedang";
		}else if (tesgtka >= 1 && tesgtka <= 24) {
			hslgtka.value = "Kurang";
		}

		//GTKI
		if (tesgtki >= 34) {
			hslgtki.value = "Baik";
		}else if (tesgtki >= 22 && tesgtki <= 33) {
			hslgtki.value = "Sedang";
		}else if (tesgtki >= 1 && tesgtki <= 42) {
			hslgtki.value = "Kurang";
		}


		//Tarik dan Dorong
		if (testarikdorong >= 30) {
			hsltarikdorong.value = "Baik";
		}else if(testarikdorong >= 20 && testarikdorong <= 29){
			hsltarikdorong.value = "Sedang";
		}else if(testarikdorong >= 1 && testarikdorong <= 19){
			hsltarikdorong.value = "Kurang";
		}


		// Punggung
		if (tespunggung >= 98) {
			hslpunggung.value = "Baik";
		}else if (tespunggung >= 52 && tespunggung <= 97) {
			hslpunggung.value = "Sedang";
		}else if (tespunggung >= 1 && tespunggung <= 51) {
			hslpunggung.value = "Kurang";
		}

		//Tungkai
		if (testungkai >= 114) {
			hsltungkai.value = "Baik";
		}else if (testungkai >= 66 && testungkai <= 113){
			hsltungkai.value = "Sedang";
		}else if (testungkai >= 1 && testungkai <= 65) {
			hsltungkai.value = "Kurang";
		}

		//Wall Squat
		if (teswallsquat >= 60) {
			hslwallsquat.value = "Baik";
		}else if (teswallsquat >= 46 && teswallsquat <= 59) {
			hslwallsquat.value = "Cukup";
		}else if (teswallsquat >= 36 && teswallsquat <= 45) {
			hslwallsquat.value = "Sedang";
		}else if (teswallsquat >= 20 && teswallsquat <= 35) {
			hslwallsquat.value = "Kurang";
		}else if (teswallsquat >= 1 && teswallsquat <= 19) {
			hslwallsquat.value = "Buruk";
		}
	}
}