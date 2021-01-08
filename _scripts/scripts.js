var mymap = L.map('mapid').setView([34.1007085,-118.3352845], 15);
    
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);
    
        L.marker([34.1019421, -118.3305904]).addTo(mymap).bindPopup("Hollywood Pacific Theater");
        L.marker([34.1000782, -118.3286253]).addTo(mymap).bindPopup("Ivar Theatre");
        L.marker([34.1013106, -118.3353487]).addTo(mymap).bindPopup("Hologram USA Theatre");
        L.marker([34.100687,  -118.3364051]).addTo(mymap).bindPopup("Cinelounge Drive-In Hollywood");
        L.marker([34.1008737, -118.3366991]).addTo(mymap).bindPopup("The Egyptian Theatre Hollywood");
        L.marker([34.1009014, -118.339924]).addTo(mymap).bindPopup("Teatro El Capitán");
        L.marker([34.1021342, -118.3403686]).addTo(mymap).bindPopup("TCL Chinese 6 Theatres");
        L.marker([34.1026424, -118.3405078]).addTo(mymap).bindPopup("Dolby Theatre");
       
        var popup = L.popup();

        //Pop-Up
        function onMapClick(e) {
            popup.setLatLng(e.latlng).setContent("You clicked the map at " + e.latlng.toString()).openOn(mymap);
        }
        mymap.on('click', onMapClick); 
