<div class="list_note_admin">
@foreach($noteAdmin as $item) 

    <p>
        <strong> {{$item->fk_note_admin->name}} </strong> <small>{{date('d/m/Y - h:m:s',strtotime($item->created_at))}}</small> : <span>{{$item->noteAdminOrder_comment}}</span>
    </p>


@endforeach
</div>

<style>
    .list_note_admin{
        height: 150px;
        overflow-y: auto;
    }
</style>