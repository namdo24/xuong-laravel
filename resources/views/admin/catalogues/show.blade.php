@extends('admin.layouts.master');

@section('title')
    Chi tiết Danh mục sản phẩm: {{ $model->name }}
@endsection

@section('content')
    <table>
        <tr>
            <th>Trường</th>
            <th>Giá trị</th>
        </tr>

        @foreach($model->toArray() as $key =>$value)
        <tr>
                <td>{{ $key }}</td>
                <td>
                    @if($key == 'cover')
                        <img src="{{ \Storage::url($value) }}" alt="" width="50px">
                    @elseif(\Str::contains($key, 'is_'))
                        {!! $value ? '<span class="badge bg-primary">YES</span>' : '<span class="badge bg-danger">NO</span>' !!}
                    @else
                        {{ $value }}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection


