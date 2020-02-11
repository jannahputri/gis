
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Peta Lombok Tengah</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>leaflet/leaflet.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>css/style.css">
</head>
<body>
	<div id="mapku">
		
	</div>

<script type="text/javascript" src="<?= base_url('assets/')?>leaflet/leaflet.js"></script>
<script src="<?= base_url('assets/')?>js/batu_keliang.js"></script>
<script src="<?= base_url('assets/')?>js/batu_keliang_utara.js"></script>
<script src="<?= base_url('assets/')?>js/janapria.js"></script>
<script src="<?= base_url('assets/')?>js/jonggat.js"></script>
<script src="<?= base_url('assets/')?>js/kopang.js"></script>
<script src="<?= base_url('assets/')?>js/praya.js"></script>
<script src="<?= base_url('assets/')?>js/praya_barat.js"></script>
<script src="<?= base_url('assets/')?>js/praya_barat_daya.js"></script>
<script src="<?= base_url('assets/')?>js/praya_tengah.js"></script>
<script src="<?= base_url('assets/')?>js/praya_timur.js"></script>
<script src="<?= base_url('assets/')?>js/peringgarata.js"></script>
<script src="<?= base_url('assets/')?>js/pujut.js"></script>
<script src="<?= base_url('assets/')?>js/loteng.js"></script>
<script>	var mapIcon = L.Icon.extend({
    iconSize:     [32, 37]
	});
    var kantoricon = new mapIcon({iconUrl: 'img/icon/office-building.png'}),
        rsudicon = new mapIcon({iconUrl: 'img/icon/hospital-building.png'}),
        tamanicon = new mapIcon({iconUrl: 'img/icon/garden.png'});
        polresicon = new mapIcon({iconUrl: 'img/icon/police.png'});
        bendunganicon = new mapIcon({iconUrl: 'img/icon/dam.png'});

        // kantor camat 
    var kantorbk = L.marker([-8.611174, 116.309989],{icon: kantoricon}).bindPopup("Kantor Camat Batukliang <img src='img/gambar/Kantorcamatbk.jpg' alt='kantorcamat' width='200px'/>");
    var kantorbku= L.marker([-8.587765, 116.326912],{icon: kantoricon}).bindPopup("Kantor Batukliang Utara <img src='img/gambar/Kantorcamatbk.jpg' alt='kantorcamat' width='200px'/>");
    var kantorjnp = L.marker([-8.6965725, 116.2826282],{icon: kantoricon}).bindPopup("Kantor Camat janapria <img src='img/gambar/kantorcamatjnp.jpg' alt='kantorcamat' width='200px'/>");
    var kantorjng = L.marker([-8.6525193, 116.1979991],{icon: kantoricon}).bindPopup("Kantor Camat jonggat <img src='img/gambar/Kantorcamatbk.jpg' alt='kantorcamat' width='200px'/> ");
    var kantorkpg = L.marker([-8.6343426, 116.3548378],{icon: kantoricon}).bindPopup("Kantor Camat Kopang <img src='img/gambar/KantorcamatKopang.jpg' alt='kantorcamat' width='200px'/>");
    var kantorpry = L.marker([-8.7237617, 116.2390431],{icon: kantoricon}).bindPopup("Kantor Camat Praya <img src='img/gambar/Kantor Camat Praya.jpg' alt='kantorcamat' width='200px'/>");
    var kantorprb = L.marker([-8.742301, 116.2410837],{icon: kantoricon}).bindPopup("Kantor Camat Praya Barat <img src='img/gambar/Kantorcamatbk.jpg' alt='kantorcamat' width='200px'/>");
    var kantorprbd = L.marker([-8.7385415, 116.2015728],{icon: kantoricon}).bindPopup("Kantor Camat Praya Barat Daya <img src='img/gambar/Kantor Camat Praya Barat.jpg' alt='kantorcamat' width='200px'/>");
    var kantorprtg = L.marker([-8.7340447, 116.316331],{icon: kantoricon}).bindPopup("Kantor Camat Praya Tegah <img src='img/gambar/kantor prateng.jpg' alt='kantorcamat' width='200px'/>");
    var kantorprtm = L.marker([-8.7614541, 116.3561055],{icon: kantoricon}).bindPopup("Kantor Camat Praya Timur <img src='img/gambar/Kantor Camat Praya Timur.jpg' alt='kantorcamat' width='200px'/>");
    var kantorprgg = L.marker([-8.6190565, 116.2517066],{icon: kantoricon}).bindPopup("Kantor Camat Pringgarata <img src='img/gambar/Kantor Camat Pringgarata.jpg' alt='kantorcamat' width='200px'/>");
    var kantorpjt = L.marker([-8.8004563, 116.292598],{icon: kantoricon}).bindPopup("Kantor Camat Pujut <img src='img/gambar/Kantor Camat Pujut.jpg' alt='kantorcamat' width='200px'/>");
    var kantorcamat = L.layerGroup([kantorbk, kantorbku, kantorjnp, kantorjng, kantorkpg, kantorpry, kantorprb, kantorprbd, kantorprtg, kantorprtm, kantorprgg, kantorpjt ]);

     // rumah sakit

    var rsudpraya = L.marker([-8.7019832, 116.2958626],{icon: rsudicon}).bindPopup("RSUD Praya' <img src='img/gambar/rsud praya.jpeg' alt='kantorcamat' width='200px'/>");
    var puskesmaspraya = L.marker([-8.7060444, 116.2726082],{icon: rsudicon}).bindPopup("Puskesmas Praya' <img src='img/gambar/puskesmas praya.jpg' alt='kantorcamat' width='200px'/>");
    var kesehatan = L.layerGroup([rsudpraya, puskesmaspraya ]);

    // taman bermain

    var lapanganmhj = L.marker([-8.7045539, 116.2712998],{icon: tamanicon}).bindPopup("Lapangan Muhajirin <img src='img/gambar/alun-alun.jpg' alt='lapanganmhj' width='350px'/>");
    var tamanbiao = L.marker([-8.7139106, 116.2869397],{icon: tamanicon}).bindPopup("Taman Biao <img src='img/gambar/biao.jpg' alt='kantorcamat' width='200px'/>");
    var tonjengberu = L.marker([-8.7141343, 116.2639882],{icon: tamanicon}).bindPopup("Tonjeng Beru Smart Garden <img src='img/gambar/tonjeng beru.jpg' alt='kantorcamat' width='200px'/>"); 
    var tamanbermain = L.layerGroup([lapanganmhj, tamanbiao, tonjengberu ]);

    // pemerintah

    var kantorbpt = L.marker([-8.706328, 116.269941],{icon: kantoricon}).bindPopup("Kantor Bupati <img src='img/gambar/kantor bupati loteng.jpg' alt='kantorcamat' width='200px'/>");
    var polisi = L.marker([-8.7093713, 116.2793799],{icon: polresicon}).bindPopup("Polres Lombok Tengah <img src='img/gambar/polres lombok tengah.png' alt='polresloteng ' width='200px' />");
    var pemerintah = L.layerGroup([kantorbpt, polisi ]);

    // bendungan

    var bendunganbtj = L.marker([-8.7320897, 116.2726254],{icon: bendunganicon}).bindPopup("Bendungan Batujai <img src='img/gambar/bendungan batujai.jpg' alt='kantorcamat' width='200px'/>");
    var bendunganpgg = L.marker([-8.7575494, 116.1880415],{icon: bendunganicon}).bindPopup("Bendungan Pengge <img src='img/gambar/bendungan pengge.jpg' alt='kantorcamat' width='200px'/>");
    var bendungan = L.layerGroup([bendunganbtj, bendunganpgg ]);

   

	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});
	var peta = L.map('mapku', {
		center: [-8.6821963, 115.9888736],
		zoom: 10,
		layers: [streets]
	});

	var baseLayers = {
		"Streets": streets,
		"Kantor Kecamatan": kantorcamat,
		"Rumah Sakit": kesehatan,
		"Taman Bermain" : tamanbermain,
		"Pemerintah" :pemerintah,
		"Bendungan" : bendungan,
		
	};

	//json batas wilayah kecamatan

 	var bk = L.geoJSON([batu_keliang], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta); 

    var bku = L.geoJSON([batu_keliang_utara], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var jnp = L.geoJSON([janapria], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta); 

    var jng = L.geoJSON([jonggat], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var kpg = L.geoJSON([kopang], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var pry = L.geoJSON([praya], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var prateng = L.geoJSON([praya_tengah], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var prabada = L.geoJSON([praya_barat_daya], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var praba = L.geoJSON([praya_barat], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var pratim = L.geoJSON([praya_timur], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var prg = L.geoJSON([peringgarata], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);

    var pjt = L.geoJSON([pujut], {
        style: function (featur) {
            return featur.properties && featur.properties.style;
        }
    }).addTo(peta);


	var overlays = {
		"Batu Kliang": bk,
		"Batu Kliang Utara" : bku,
		"Janapria" : jnp,
		"Jonggat": jng,
		"Kopang" : kpg,
		"Praya" : pry,
		"Praya Tengah" : prateng,
		"Praya Barat Daya" : prabada,
		"Praya Barat" : praba,
		"Praya Timur":pratim,
		"Pringgarata": prg,
		"Pujut" : pjt
	};
	L.control.layers(overlays, baseLayers).addTo(peta);
	L.geoJSON([btskab], {
		style: function (feature) {
			return feature.properties && feature.properties.style;
		}
	}).addTo(peta);

</script>
</body>
</html>