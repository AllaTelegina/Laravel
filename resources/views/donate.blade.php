

<div id="donationModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Пожертвование</h2>
        <form action="/donate" method="POST">
@csrf
<label for="amount">Сумма:</label>
<input type="number" id="amount" name="amount" required>
<button type="submit">Пожертвовать</button>
</form>
</div>
</div>
