document.addEventListener('alpine:init', () => {
    Alpine.data('topBtn', () => ({
        scrolltoTop() {
            window.pageYOffset = 0;
        }
    }));
});

document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('toggle');
    const noteSelect = document.getElementById('countries');
    const noteForm = document.getElementById('noteForm');

    const options = {
        'з': [
            { value: 'obednya', text: 'Обедня' },
            { value: 'moleben', text: 'Молебен' },
            { value: 'sorokoust40', text: 'Сорокоуст 40 дней' },
            { value: 'sorokoust180', text: 'Сорокоуст пол года' },
            { value: 'sorokoust365', text: 'Сорокоуст на год' },
            { value: 'acafistvladimiru', text: 'Акафист святому равноапостольному князю Владимиру' },
            { value: 'acafistnevscomu', text: 'Акафист святому благоверному великому князю Александру Невскому' },
            { value: 'acafistcelitelnice', text: 'Аквфист перед иконой Божией Матери «Целительница»' },
            { value: 'acafistnchudotvorcu', text: 'Акафист святителю Николаю Чудотворцу' },
            { value: 'acafistvsecarica', text: 'Акафист перед иконой Божией Матери «Всецарица»' },
            { value: 'acafistneupivaemayachasha', text: 'Акафист перед иконой Божией Матери «Неупиваемая Чаша»' }
        ],
        'у': [
            { value: 'obednya', text: 'Обедня' },
            { value: 'panihida', text: 'Панихида' },
            { value: 'sorokoust40', text: 'Сорокоуст 40 дней' },
            { value: 'sorokoust180', text: 'Сорокоуст пол года' },
            { value: 'sorokoust365', text: 'Сорокоуст на год' }
        ]
    };
    function updateOptions() {
        const type = toggle.checked ? 'у' : 'з';
        noteSelect.innerHTML = '';
        options[type].forEach(option => {
            const opt = document.createElement('option');
            opt.value = option.value;
            opt.textContent = option.text;
            noteSelect.appendChild(opt);
        });
    }
    function handleNoteChange() {
        const selectedOption = noteSelect.value;
        if (selectedOption === 'panihida') {
            toggle.checked = true;
            toggle.disabled = true;
        } else if (selectedOption.startsWith('acafist') || selectedOption === 'moleben') {
            toggle.checked = false;
            toggle.disabled = true;
        } else {
            toggle.disabled = false;
        }
    }
    toggle.addEventListener('change', updateOptions);
    noteSelect.addEventListener('change', handleNoteChange);
    updateOptions(); // Initialize options on page load
});
document.addEventListener('show-donation-dialog', event => {
    alert('Сумма пожертвования: ' + event.detail.donation + ' руб.');
});
document.getElementById('submitNote').addEventListener('click', function(event) {
    event.preventDefault(); // Предотвращаем отправку формы

    // Получаем данные из формы (например, текст и сумму пожертвования)
    let noteText = "Благословенного дня! Ваша заявка принята! Проверьте свою почту"; // Замените на реальное значение из формы
    let donationAmount = 100; // Замените на реальное значение из формы

    // Устанавливаем текст и сумму в модальное окно
    document.getElementById('modalText').innerText = noteText;
    document.getElementById('donationAmount').innerText = "Сумма пожертвования: " + donationAmount;

    // Показываем модальное окно
    document.getElementById('donationModal').classList.remove('hidden');
});
document.getElementById('closeModal').addEventListener('click', function() {
    // Скрываем модальное окно
    document.getElementById('donationModal').classList.add('hidden');
});
document.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById("donationModal");
    var btn = document.getElementById("donateBtn");
    var closeModalBtn = document.getElementById('closeModal');
    var span = document.getElementsByClassName("close")[0];

    // Показ модального окна
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Скрытие модального окна
    closeModalBtn.onclick = span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

  function(){
    fetch("https://azbyka.ru/days/calendar/?embed=js,styles,legend,events").then(response => response.text()).then(data => {
        document.getElementById("az_calendar_embed").innerHTML = data;
    });

    function showTab(tabId) {
        // Hide all tab content
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });

        // Show the selected tab content
        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        // Remove the 'active' class from all tab buttons
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach((button) => {
            button.classList.remove('active');
        });

        // Add the 'active' class to the clicked tab button
        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }







// Initialize the first tab
    showTab('tab1');
}











