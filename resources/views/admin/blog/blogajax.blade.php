<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 5%">S. No</th>
            <th style="width: 10%">Title</th>
            <th style="width: 10%">Status</th>
            <th style="width: 8%">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(count($allData) != 0) {
            ?>
            @foreach($allData as $u)
                <tr class="data">
                    <td>{{ ++$srNo }}</td>
                    <td>
                        {{$u->title}}
                    </td>
                    
                    <td >
                        <a href="{{route('page.edit', ['id' => Crypt::encrypt($u->id)])}}"><i class="fa fa-edit"></i></a>
                        <a class="deleterecord" data-link="{{route('page.delete')}}" data-id="{{$u->id}}"><i class="fa fa-trash deleterecord"  data-link="{{route('page.delete')}}"  data-id="{{$u->id}}" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            <?php
        } else {
            ?>
                <tr><td colspan="4"><center>No Record Found</center></td></tr>
            <?php
        } ?>
    </tbody>
</table>
<div class="pagination1">
    {{$allData->links()}}
</div>
