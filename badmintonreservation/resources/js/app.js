import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// 都道府県選択時に市区町村のリストを更新
document.getElementById('prefecture').addEventListener('change', function() {
    const prefectureId = this.value;
    
    // 市区町村を取得するAPIを呼び出す
    fetch(`/get-municipalities/${prefectureId}`)
        .then(response => response.json())
        .then(data => {
            const municipalitySelect = document.getElementById('municipality');
            municipalitySelect.innerHTML = '<option value="">選択してください</option>';
            
            // 市区町村のリストを更新
            data.forEach(municipality => {
                municipalitySelect.innerHTML += `<option value="${municipality.id}">${municipality.name}</option>`;
            });
        })
        .catch(error => console.error('Error fetching municipalities:', error));
});

// 体育館検索の動的処理
document.getElementById('gym').addEventListener('input', function() {
    const searchTerm = this.value;
    const municipalityId = document.getElementById('municipality').value;

    if (searchTerm.length > 1) {
        fetch(`/search-gyms?municipality_id=${municipalityId}&term=${searchTerm}`)
            .then(response => response.json())
            .then(data => {
                const suggestions = document.getElementById('gym-suggestions');
                suggestions.innerHTML = '';

                // 体育館の候補を表示
                data.forEach(gym => {
                    suggestions.innerHTML += `<div class="p-2 hover:bg-gray-200 cursor-pointer">${gym.name}</div>`;
                });

                suggestions.classList.remove('hidden');
            })
            .catch(error => console.error('Error searching gyms:', error));
    }
});