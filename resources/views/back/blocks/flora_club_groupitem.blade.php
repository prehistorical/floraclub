<tr data-item-id="{{$item['id']}}" data-block="flora_club">

    <td>
        <input type="text" class="form-control group_field" placeholder="Название" value="{{$item['stringfields']['title']}}" data-item-id="{{$item['id']}}" data-block="flora_club" data-field-name="title" data-field-type="string">
    </td>

    <td>
        <input type="text" class="form-control group_field" placeholder="Описание" value="{{$item['stringfields']['remark']}}" data-item-id="{{$item['id']}}" data-block="flora_club" data-field-name="remark" data-field-type="string">
    </td>

    <td>
        <input class="form-control group_pre_field" type="number" value="{{$item['sorter']}}" data-item-id="{{$item['id']}}" data-block="flora_club" data-field-name="sorter" data-field-type="numb">
    </td>

    <td>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="group_pre_field" data-item-id="{{$item['id']}}" data-block="flora_club" data-field-type="bool" data-field-name="show"
                @if ($item['show'])
                checked
                @endif
                >
            </label>
        </div>
    </td>

    <td class="itemcontrols">
        <div class="btn-group">
            <button type="button" class="btn btn-default any_save"
                    data-block="flora_club"
                    data-entity="groupitem"
                    data-item-id="{{$item['id']}}"
                    data-descr="Скидка на букеты"
                >
                <i class="glyphicon glyphicon-floppy-disk"></i>
            </button>
            <button type="button" class="btn btn-default any_delete" data-item-id="{{$item['id']}}" data-block="flora_club">
                <i class="glyphicon glyphicon-remove"></i>
            </button>
        </div>
    </td>

</tr>

