<div>
    @php
    $no = 1;
    @endphp
    <table id="users-table" class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><input type="checkbox" id="master"></th>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Permissions</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $row)
            <tr> 
                <td><input type="checkbox" class="sub_chk" name="userids" value="{{$row->id}}" data-name="{{$row->name}}"></td>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>
                    {{$row->roles->pluck('name')->implode(', ')}} 
                </td>
                <td>
                    {{$row->permissions->pluck('name')->implode(', ')}} 
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>