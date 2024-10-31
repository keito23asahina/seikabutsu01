{"filter":false,"title":"app.js","tooltip":"/badmintonreservation/resources/js/app.js","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":42},"end":{"row":13,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"9e8b62aaf7e9f7669d24729672b1df9f79112922","undoManager":{"mark":6,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["import './bootstrap';","","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":48,"column":0},"action":"insert","lines":["import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});",""]}],[{"start":{"row":0,"column":0},"end":{"row":48,"column":0},"action":"remove","lines":["import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":47,"column":3},"action":"insert","lines":["import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});"],"id":4}],[{"start":{"row":47,"column":3},"end":{"row":94,"column":3},"action":"insert","lines":["import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});"],"id":5}],[{"start":{"row":51,"column":0},"end":{"row":94,"column":3},"action":"remove","lines":["","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});"],"id":6},{"start":{"row":50,"column":23},"end":{"row":51,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":50,"column":23},"action":"remove","lines":["import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;"],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":47,"column":3},"action":"insert","lines":["import './bootstrap';","import Alpine from 'alpinejs';","","window.Alpine = Alpine;","","Alpine.start();","","// 都道府県選択時に市区町村のリストを更新","document.getElementById('prefecture').addEventListener('change', function() {","    const prefectureId = this.value;","    ","    // 市区町村を取得するAPIを呼び出す","    fetch(`/get-municipalities/${prefectureId}`)","        .then(response => response.json())","        .then(data => {","            const municipalitySelect = document.getElementById('municipality');","            municipalitySelect.innerHTML = '<option value=\"\">選択してください</option>';","            ","            // 市区町村のリストを更新","            data.forEach(municipality => {","                municipalitySelect.innerHTML += `<option value=\"${municipality.id}\">${municipality.name}</option>`;","            });","        })","        .catch(error => console.error('Error fetching municipalities:', error));","});","","// 体育館検索の動的処理","document.getElementById('gym').addEventListener('input', function() {","    const searchTerm = this.value;","    const municipalityId = document.getElementById('municipality').value;","","    if (searchTerm.length > 1) {","        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)","            .then(response => response.json())","            .then(data => {","                const suggestions = document.getElementById('gym-suggestions');","                suggestions.innerHTML = '';","","                // 体育館の候補を表示","                data.forEach(gym => {","                    suggestions.innerHTML += `<div class=\"p-2 hover:bg-gray-200 cursor-pointer\">${gym.name}</div>`;","                });","","                suggestions.classList.remove('hidden');","            })","            .catch(error => console.error('Error searching gyms:', error));","    }","});"],"id":8}]]},"timestamp":1728986566940}