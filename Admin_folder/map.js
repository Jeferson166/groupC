const map = new maplibregl.Map({
    container: 'map',
    style: 'https://tiles.openfreemap.org/styles/bright',
    center: [121.134594, 14.567081], // starting position [lng, lat]
    zoom: 15.5, // starting zoom
    bearing: 27, // rotation in degrees
    pitch: 15 // tilt in degrees
});

const marker = new maplibregl.Marker()
    .setLngLat([121.134594, 14.567081])
    .addTo(map);

const marker1 = new maplibregl.Marker()
    .setLngLat([121.12655875, 14.56561131])
    .addTo(map);

const marker2 = new maplibregl.Marker()
    .setLngLat([121.146109, 14.576874])
    .addTo(map);

const chapters = {
    'brgy_san_juan': {
        bearing: 27,
        center: [121.134594, 14.567081],
        zoom: 15.5,
        pitch: 15
    },
    'brgy_santa_ana': {
        duration: 6000,
        center: [121.12655875, 14.56561131],
        bearing: 150,
        zoom: 15,
        pitch: 0
    },
    // renamed key so it matches the HTML id `brgy_san_isidro`
    'brgy_san_isidro': {
        bearing: 90,
        center: [121.146109, 14.576874],
        zoom: 13,
        speed: 0.6,
        zoom: 15,
        pitch: 40
    }
};

// Data used to render the table rows (converted from the static HTML rows)
const locations = {
    'brgy_san_juan': {
        name: 'Barangay San Juan Health Center',
        address: 'Tanchoco Ave., El Monteverde Subd., Barangay San Juan, Taytay, Rizal',
        phone: '09123456789',
        hours: '(Mon-Sat) <br> 9:00 AM - 5:00 PM',
        type: 'General Hospital'
    },
    'brgy_santa_ana': {
        name: 'Barangay Sta. Ana Health Center',
        address: 'B.A. Cruz st., Tudela, Barangay Sta. Ana, Taytay, Rizal',
        phone: '09123456789',
        hours: '(Mon-Fri) <br> 8:30 AM - 5:30 PM',
        type: 'General Hospital'
    },
    'brgy_san_isidro': {
        name: 'Barangay San Isidro Health Center',
        address: 'Noli Pascual st., Gregoria Heights Subd., Barangay San Isidro, Taytay, Rizal',
        phone: '09123456789',
        hours: '(Tue-Sat) <br> 8:00 AM - 5:00 PM',
        type: 'General Hospital'
    }
};

// Active chapter name used for setting the `active` class on the table row
let activeChapterName = 'brgy_san_juan';

// Renders table rows into a <tbody> element with id `locations-tbody`.
// If you use a different id in your HTML, pass it as the first argument to `renderLocations()`.
function renderLocations(tbodyId = 'locations-tbody') {
    const tbody = document.getElementById(tbodyId);
    if (!tbody) {
        console.warn('renderLocations: no tbody found with id', tbodyId);
        return;
    }

    tbody.innerHTML = '';
    for (const id in locations) {
        const loc = locations[id];
        const tr = document.createElement('tr');
        tr.id = id;
        if (id === activeChapterName) tr.className = 'active';
        tr.innerHTML = `<td>${loc.name}</td>
    <td>${loc.address}</td>
    <td>${loc.phone}</td>
    <td>${loc.hours}</td>
    <td>${loc.type}</td>`;
        tbody.appendChild(tr);

        // clicking a row will fly to the matching chapter on the map
        tr.addEventListener('click', function (e) {
            e.preventDefault();
            setActiveChapter(id);
        });
    }
}

// render rows now (ensure your HTML table has a <tbody> with id `locations-tbody` or pass the correct id to `renderLocations()`)
renderLocations();

function setActiveChapter(chapterName) {
    if (chapterName === activeChapterName) return;

    if (chapters[chapterName]) {
        map.flyTo(chapters[chapterName]);
    }

    const newEl = document.getElementById(chapterName);
    const oldEl = document.getElementById(activeChapterName);
    if (newEl) newEl.setAttribute('class', 'active');
    if (oldEl) oldEl.setAttribute('class', '');

    activeChapterName = chapterName;
}

function isElementOnScreen(id) {
    const element = document.getElementById(id);
    const bounds = element.getBoundingClientRect();
    return bounds.top < window.innerHeight && bounds.bottom > 0;
}