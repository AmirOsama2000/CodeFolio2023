@extends('cms.parentss')

@section('title' , 'Form')

@section('styles')

@section('main-title' , 'Create Form')

@section('sub-title' , 'Create Form')


@endsection

@section('content')

<style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
        body{
            font-family: 'Tajawal', sans-serif;
        }
</style>


<section class="content" style="background-color: #6a0494">
    <div class="container-fluid" >
      <div class="row">
        <div class="img">
            <img width="622px" style="padding: 40px 0" src="{{ asset('cms/dist/img/front.jpg') }}" alt="">
            <img width="622px" style="padding: 40px 0" src="{{ asset('cms/dist/img/back.jpg') }}" alt="">
        </div>
        <!-- left column -->
        <div class="col-md-12" >
          <!-- general form elements -->
          <div class="card" style="background-color: #ffc601" >
            <div class="card-header" style=" margin: auto;">
              <h3 style="color: #6a0494; font-weight: 500; margin: auto;" class="card-title">للاستفسار عن تفاصيل الكورس</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form>
                @csrf


              <div class="card-body" style="background-color: #6a0494; box-shadow: none">
                <div class="row">
                    <div class="form-group col-md-6">
                      <label style="color: #ffc601;"  for="name">الاسم الكريم</label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="...ادخل اسمك كاملاً">
                    </div>
                    <div class="form-group col-md-6">
                      <label style="color: #ffc601;" for="age">العمر</label>
                      <input type="text" class="form-control" name="age" id="age" placeholder="ادخل عمرك الحالي...">
                    </div>
                    <div class="form-group col-md-12">
                      <label style="color: #ffc601;" for="contact">وسيلة تواصل فعالة</label>
                      <input type="text" class="form-control" name="contact" id="contact" placeholder="واتس اب - تليغرام - فيس بوك...الخ">
                    </div>
                    <div class="form-group col-md-6">
                      <label style="color: #ffc601;" for="email">البريد الإلكروني</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="ادخل بريدك الإلكتروني...">
                    </div>
                    <div class="form-group col-md-6">
                        <label style="color: #ffc601;" for="course">الكورس</label>
                        <select class="form-control select2" name="course" id="course"  style="width: 100%;">
                          <option value="FrontEnd">Front-End</option>
                          <option value="BackEnd">Back-End</option>
                          <option value="fullstack">full-Stack</option>
                        </select>
                      </div>
                      <div class="form-group col-md-12">
                        <label style="color: #ffc601;" for="message">أرسل رسالة</label>
                        <input type="text" class="form-control" name="message" id="message" placeholder="لاستفسارات إضافية...">
                      </div>


            </div>


              <div class="card-footer" style="position: relative;">
                <button style="position: absolute; right: 580px;top: 0; padding: 7px 30px" type="button" onclick="performStore()" class="btn btn-success">إرسال</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

          <!-- /.card -->
  </section>

@endsection


@section('scripts')
  <script>

    function performStore(){
        let formData = new FormData();
        formData.append('name' , document.getElementById('name').value);
        formData.append('age' , document.getElementById('age').value);
        formData.append('contact' , document.getElementById('contact').value);
        formData.append('email' , document.getElementById('email').value);
        formData.append('course' , document.getElementById('course').value);
        formData.append('message' , document.getElementById('message').value);

        store('/cms/admin/forms' , formData );
    }

  </script>

@endsection
