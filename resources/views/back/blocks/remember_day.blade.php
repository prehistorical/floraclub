<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Заголовок-вопрос:</label>
            <input type="text" class="form-control block_pre_field" placeholder="Введите заголовок"
                   value="{{$remember_day['title']}}"
                   data-block="remember_day"
                   data-field-type="string"
                   data-field-name="title">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Ответ:</label>
            <input type="text" class="form-control block_field"
                   value="{{$remember_day['stringfields']['phrase_answer']}}"
                   data-block="remember_day"
                   data-field-type="string"
                   data-field-name="phrase_answer">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Соц. ремарка в %:</label><br>
            <textarea class="descrfield block_field" cols="30" required
                      data-block="remember_day"
                      data-field-type="text"
                      data-field-name="remark">
{!!$remember_day['textfields']['remark']!!}
            </textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Цитата:</label><br>
            <textarea class="descrfield block_field" cols="30" required
                      data-block="remember_day"
                      data-field-type="text"
                      data-field-name="citation_coco">
{!!$remember_day['textfields']['citation_coco']!!}
            </textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Подпись цитаты:</label>
            <input type="text" class="form-control block_field"
                   value="{{$remember_day['stringfields']['citsign_coco']}}"
                   data-block="remember_day"
                   data-field-type="string"
                   data-field-name="citsign_coco">
        </div>
    </div>
    <div class="col-md-4">
        <br>
        <div class="form-group">
            <span class="file-input btn btn-primary btn-file" style="width: 104px;">
                <i class="glyphicon glyphicon-picture"></i>Картинка к цитате

                <input class="input_file block_field" type="file" accept="image/*" name="previewimage"
                       data-entity="block"
                       data-block="remember_day"
                       data-field-name="coco"
                       data-field-type="image">
                <input class="primary_link" type="hidden" data-block="remember_day" data-field-name="coco"
                       value="{{$remember_day['images']['coco']['primary_link']}}">
                <input class="preview_link" type="hidden" data-block="remember_day" data-field-name="coco"
                       value="{{$remember_day['images']['coco']['preview_link']}}">
            </span><br>
            <img src="/images/{{$remember_day['images']['coco']['preview_link']}}" class="preview" data-block="remember_day" data-field-name="coco">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10">
        <div class="alert block_messenger" style="text-align: center" data-block="remember_day">...</div>
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary pull-right any_save"
                data-block="remember_day"
                data-entity="block"
                data-descr="Ты ведь помнишь, какой сегодня день?"
            >
            <span>Сохранить</span>
        </button>
    </div>
</div>