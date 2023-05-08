<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('cms/dist/img/logo.png') }}" type="image/x-icon">
    <title>كودفوليو | CodeFolio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
      body {
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        font-family: 'Tajawal', sans-serif;
        background-color: #6a0494;
      }
      .container {
        max-width: 800px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
      }
      h1 {
        font-size: 2rem;
        font-weight: bold;
        margin-top: 120px ;
        color: #fff;
      }
      p {
        font-size: 1.6rem;
        font-weight: 600;
        margin: 1rem 0;
        color: #ffc601;
      }
      img {
        max-width: 100%;
        height: auto;
        margin-top: 30px;
      }
      .links {
        display: flex;
        justify-content: center;
        margin-top: 50px;
      }
      .links a {
        display: inline-block;
        padding: 10px 40px;
        margin: 0 0.5rem;
        border-radius: 30px;
        outline: none;
        box-sizing: border-box;
        text-decoration: none;
        background-color: #ffc601;
        color: #6a0494;
        font-size: 1.3rem;
        font-weight: 600;
        transition: .7s;


      }
      .links a:hover {
        background-color: #6a0494;
        color: #ffc601;
        border: 2px #fff solid;

      }
      .copywrite{
        font-size: 1rem;
        font-weight: 400;
        margin-top: 4rem;
        color: #fff;
      }
      span{
        color: #ffc601;
      }
      .learn{
        display: inline-block;
        margin-top: 50px;
        background-color: #fff;
        color: #6a0494;
        text-decoration: none;
        font-weight: 500;
        font-size: 1.4rem;
        padding: 10px 30px;
        border-radius: 35px;
        transition: .5s;


      }
      .learn:hover {
        color: #ffc601;
        border: 2px #fff solid;
        background-color: #6a0494;


      }
      @media screen and (max-width: 600px) {
        h1{
            margin-top: 50px;
            font-size: 1.7rem;
        }
        p {
        font-size: 1.5rem;
        font-weight: 500;

      }
        img {
            max-width: 80%;
             height: auto;
        }
  .links {
    flex-direction: column;
    padding: 0 15px;
  }
  .links a {
    margin-top: 10px;
  }
  .copywrite{
        margin-top: 20px;
      }
      .aa{
        color: #ffc601;
        text-decoration: none;
      }
}

    </style>
  </head>
  <body>
    <div class="container">
      <h1>هل تريد أفكار مشاريع تٌدرب نفسك عليها</h1>
      <p>جهز عقلك .. وابدأ الآن</p>
      <img src="{{ asset('cms/dist/img/logo2.png') }}" alt="Placeholder Image">
      <div class="links">
        <a href="{{ route('htmls.index') }}">HTML</a>
        <a href="{{ route('csss.index') }}">CSS</a>
        <a href="{{ route('jses.index') }}">JS</a>
        <a href="{{ route('templates.index') }}">Full Template</a>
      </div>
      <a href="{{ route('forms.create') }}" class="learn">هل تريد تعلم برمجة الويب ؟</a>
      <p class="copywrite">تمت برمجة الموقع بواسطة : <a href="https://www.facebook.com/amirosama00" target="blank" class="aaa" style="color: #ffc601;text-decoration: none;
        ">أمير أسامة</a></p>
    </div>
  </body>
</html>
