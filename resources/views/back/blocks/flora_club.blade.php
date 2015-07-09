<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Заголовок:</label>
            <input type="text" class="form-control block_pre_field" placeholder="Введите заголовок"
                   value="{{$flora_club['title']}}"
                   data-block="flora_club"
                   data-field-type="string"
                   data-field-name="title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Подзаголовок 1:</label>
            <input type="text" class="form-control block_field"
                   value="{{$flora_club['stringfields']['subtitle_1']}}"
                   data-block="flora_club"
                   data-field-type="string"
                   data-field-name="subtitle_1">
        </div>
    </div>
</div>
<?php
    $flora_club_group = $flora_club['group'];
?>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="alert group_messenger" data-block="flora_club" style="text-align: center">...</div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <h4 class="sub-header">Скидки:</h4><br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Порядок</th>
                    <th>Показывать</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="group" data-block="flora_club">

                @foreach ($flora_club_group as $item)
                    @include('back/blocks/flora_club_groupitem')
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">
                        <button class="btn btn-success any_create"
                                data-block="flora_club"
                                data-descr="Скидка"
                            >
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Добавить дополнительную опцию</span>
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Подзаголовок 2:</label>
            <input type="text" class="form-control block_field"
                   value="{{$flora_club['stringfields']['subtitle_2']}}"
                   data-block="flora_club"
                   data-field-type="string"
                   data-field-name="subtitle_2">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Описание 1:</label><br>
            <textarea class="descrfield block_field" cols="30" required
                      data-block="flora_club"
                      data-field-type="text"
                      data-field-name="descr_1">
{!!$flora_club['textfields']['descr_1']!!}
            </textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Описание 2:</label><br>
            <textarea class="descrfield block_field" cols="30" required
                      data-block="flora_club"
                      data-field-type="text"
                      data-field-name="descr_2">
{!!$flora_club['textfields']['descr_2']!!}
            </textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Эхофраза про цветы:</label>
            <input type="text" class="form-control block_field"
                   value="{{$flora_club['stringfields']['echophrase']}}"
                   data-block="flora_club"
                   data-field-type="string"
                   data-field-name="echophrase">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10">
        <div class="alert block_messenger" style="text-align: center" data-block="flora_club">...</div>
    </div>
    <div class="col-md-2">
        <button class="btn btn-primary pull-right any_save"
                data-block="flora_club"
                data-entity="block"
                data-descr="Цветочный клуб Флора Экспресс"
            >
            <span>Сохранить</span>
        </button>
    </div>
</div>