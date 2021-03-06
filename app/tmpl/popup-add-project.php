<div id="new-progect-popup">
  <div class="modal-wrapper">
    <div class="modal-header">
      <button type="button" class="b-close"></button>
      <h4 class="modal-title">Добавление проекта</h4>
    </div>

    <div class="modal-body">
      <form id="add-new-project" class="form" role="form">  
      <!-- Вывод сообщений с сервера -->
      <div class="server-mes error-mes"></div>
      <div class="server-mes success-mes"></div>
      <!-- Название проекта -->
      <div class="form-group">
        <label for="projectName" class="label">Название проекта</label>
        <input type="text" name="projectName" class="input" id="projectName" placeholder="Введите название" qtip-content="Вы не ввели название">
      </div>      
      <!-- Картинка проекта -->
      <div class="form-group">
        <label for="projectImage" class="label">Картинка проекта</label>
        <div class="fileupload-wrapper" id="uploadfile">
          <input id="fileupload" type="file" name="files[]" multiple />
          <input id="fileurl" type="hidden" name="fileurl" />
          <input id="filename" type="text" class="input" name="filename" placeholder="Загрузите изображение" disabled qtip-content="Вы не выбрали изображение"/>
        </div>
      </div>
      <!-- URL проекта -->
      <div class="form-group">
        <label for="projectUrl" class="label">URL проекта</label>
        <input type="text" name="projectUrl" class="input" id="projectUrl" placeholder="Добавьте ссылку" qtip-content="Вы не добавили ссылку">
      </div>
      <!-- Описание -->
      <div class="form-group">
        <label for="projectDesc" class="label">Описание</label>
        <textarea name="text" id="projectDesc" class="textarea" rows="3" placeholder="Пара слов о вашем проекте" qtip-content="Описание проекта обязательно"></textarea>
      </div>
      <!-- Кнопка "Отправить" -->
        <div class="btn-wrapp">
          <button type="submit" class="btn">Добавить</button>
        </div>      
      </form>
    </div>
  </div>
</div>
