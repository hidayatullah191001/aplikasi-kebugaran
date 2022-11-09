function hitung (usia, jenis_kelamin){
	var tesdodging = document.getElementById('tesdodging').value;
	var tesagility = document.getElementById('tesagility').value;
	var testtest = document.getElementById('testtest').value;
	var tesillinois = document.getElementById('tesillinois').value;

	var hsldodging = document.getElementById('hsldodging');
	var hslagility = document.getElementById('hslagility');
	var hslttest = document.getElementById('hslttest');
	var hslillinois = document.getElementById('hslillinois');

	if (jenis_kelamin == 'Laki-laki') {

		if (tesdodging >= 0.1 && tesdodging <= 11.2) {
			hsldodging.value = "Excellent";
		}else if (tesdodging >= 11.3 && tesdodging <= 13.3) {
			hsldodging.value = "Good";
		}else if (tesdodging >= 13.4 && tesdodging <= 15.5) {
			hsldodging.value = "Average";
		}else if (tesdodging >= 15.6 && tesdodging <= 17.8) {
			hsldodging.value = "Fair";
		}else if (tesdodging >= 17.9) {
			hsldodging.value = "Poor";
		}

		if (tesagility >= 0.1 && tesagility <= 15.3) {
			hslagility.value = "Excellent";
		}else if (tesagility >= 15.4 && tesagility <= 16.1) {
			hslagility.value = "Good";
		}else if (tesagility >= 16.2 && tesagility <= 18.1) {
			hslagility.value = "Average";
		}else if (tesagility >= 18.2 && tesagility <= 18.3) {
			hslagility.value = "Fair";
		}else if (tesagility >= 18.4) {
			hslagility.value = "Poor";
		}


		if (testtest >= 0.1 && testtest <= 9.5) {
			hslttest.value = "Excellent";
		}else if (testtest >= 9.5 && testtest <= 10.5) {
			hslttest.value = "Good";
		}else if (testtest >= 10.6 && testtest <= 11.5) {
			hslttest.value = "Average";
		}else if (testtest >= 11.6) {
			hslttest.value = "Poor";
		}

		if (tesillinois >= 0.1 && tesillinois <= 15.2) {
			hslillinois.value = "Excellent";
		}else if (tesillinois >= 15.3 && tesillinois <= 16.1) {
			hslillinois.value = "Good";
		}else if (tesillinois >= 16.2 && tesillinois <= 18.1) {
			hslillinois.value = "Average";
		}else if (tesillinois >= 18.2 && tesillinois <= 18.3) {
			hslillinois.value = "Fair";
		}else if (tesillinois >= 18.4) {
			hslillinois.value = "Poor";
		}

	}else{
		if (tesdodging >= 0.1 && tesdodging <= 12.2) {
			hsldodging.value = "Excellent";
		}else if (tesdodging >= 12.3 && tesdodging <= 15.3) {
			hsldodging.value = "Good";
		}else if (tesdodging >= 15.4 && tesdodging <= 18.5) {
			hsldodging.value = "Average";
		}else if (tesdodging >= 18.6 && tesdodging <= 21.8) {
			hsldodging.value = "Fair";
		}else if (tesdodging >= 21.9) {
			hsldodging.value = "Poor";
		}

		if (tesagility >= 0.1 && tesagility <= 17) {
			hslagility.value = "Excellent";
		}else if (tesagility >= 17.1 && tesagility <= 17.9) {
			hslagility.value = "Good";
		}else if (tesagility >= 18 && tesagility <= 21.7) {
			hslagility.value = "Average";
		}else if (tesagility >= 21.8 && tesagility <= 23) {
			hslagility.value = "Fair";
		}else if (tesagility >= 24) {
			hslagility.value = "Poor";
		}

		if (testtest >= 0.1 && testtest <= 10.5) {
			hslttest.value = "Excellent";
		}else if (testtest >= 10.6 && testtest <= 11.5) {
			hslttest.value = "Good";
		}else if (testtest >= 11.6 && testtest <= 12.5) {
			hslttest.value = "Average";
		}else if (testtest >= 12.6) {
			hslttest.value = "Poor";
		}

		if (tesillinois >= 0.1 && tesillinois <= 17) {
			hslillinois.value = "Excellent";
		}else if (tesillinois >= 17.1 && tesillinois <= 17.9) {
			hslillinois.value = "Good";
		}else if (tesillinois >= 18 && tesillinois <= 21.7) {
			hslillinois.value = "Average";
		}else if (tesillinois >= 21.8 && tesillinois <= 23) {
			hslillinois.value = "Fair";
		}else if (tesillinois >= 24) {
			hslillinois.value = "Poor";
		}
	}
}