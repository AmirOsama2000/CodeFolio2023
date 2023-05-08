@extends('cms.parentss')

@section('title' , 'Css')

@section('styles')

@section('main-title' , 'Index Css')

@section('sub-title' , 'Index Css')


@endsection

@section('content')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
  body {
    min-height: 100vh;
    font-family: 'Tajawal', sans-serif;
    background-color: #6a0494;
  }
  </style>
<div class="row" dir="rtl">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color: #6a0494">
            @if (Auth::user())
                <a href="{{ route('csss.create') }}" type="submit" class="btn btn-success">إضافة مشروع CSS</a>
            @endif

        </div>

        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="background-color: #6a0494; outline: none">
          <table style="width: 50%; background-color: #6a0494; margin: auto; margin-top: 40vh; outline: none;
          transform: translateY(-50%);" class="table table-hover text-nowrap">
            <thead style="background-color: #ffc601">
              <tr>
                <th style="color: #6a0494">#</th>
                <th style="color: #6a0494; text-align: center">وصف المشروع</th>
                <th style="color: #6a0494">ملفات المشروع</th>
                @if (Auth::user())
                <th style="color: #6a0494">الإعدادت</th>
                @endif
              </tr>
            </thead>
            <tbody style="width: 70%; background-color: #6a0494; outline: none; border: 2px solid #ffc601;">

                @foreach ($csss as $css )
                <tr style="color: #fff; outline: none">
                    <td style="outline: none">{{ $css->id }}</td>
                    <td style="outline: none">{{ $css->name }}</td>
                    <td style="outline: none"><a target="blank" style="text-decoration: none; color: #fff" href="{{ $css->file }}">تحميل المرفقات</a></td>
                    @if (Auth::user())

                    <td style="outline: none">
                        <div class="">
                            <a href="{{ route('csss.edit' , $css->id) }}" type="button" class="btn btn-primary">تعديل</a>
                            <a href="#"  onclick="performDestroy({{ $css->id }} , this)" class="btn btn-danger">حذف</a>
                        </div>
                    </td>
                    @endif



                </tr>
                @endforeach

            </tbody>
          </table>
          <div class="pag" style="margin-right: 41%">
          {{ $csss->links() }}
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection


@section('scripts')
<script>

    function performDestroy(id , referance){
        confirmDestroy('/cms/admin/csss/'+id ,referance);
    }
</script>
@endsection
