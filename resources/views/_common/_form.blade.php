<form method="post" id="id-form_messages" action="">
    <div class="form-group">
        <label for="name">Имя: *</label>
        <input type="text" name="name" placeholder="Имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" placeholder="E-mail" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Сообщение: *</label>
        <textarea name="message" id="message" cols="50" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Добавить">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
</form>