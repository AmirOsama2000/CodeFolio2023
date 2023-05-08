<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
                @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');

        body{
            background-color: #6a0494;
            font-family: 'Tajawal', sans-serif;

        }
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 95vh;
		}

		.section {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
			max-width: 80%;
			margin: 0 auto;
		}

		.section img {
			max-width: 100%;
		}

		 p {
			margin: 1em 0;
            color: #f0f8ff;
            width: 60%;
            font-size: 1rem;
            text-align: center;
            padding: 30px 0;
		}

		 a {
			padding: 0.5em 1.6em;
			margin: 1em;
			font-size: 1.4em;
			border-radius: 5px;
			background-color: #ffc601;
			color: #6a0494;
            font-weight: 500;
			border: none;
			cursor: pointer;
			transition: all 0.3s ease;
            text-decoration: none;
		}
        .a2{
            border: solid 2px #f0f8ff;
            background-color: #6a0494;
            color: #ffc601;
            padding: 10px 30px;
        }

		 a:hover {
			background-color: #6a0494;
            color: #f0f8ff;
		}

		@media screen and (min-width: 768px) {
			.section {
				flex-direction: row;
				align-items: center;
				text-align: left;
			}

			 p {
				margin: 0 1em;
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="section">
			<img src="{{ asset('cms/dist/img/logo2.png') }}" alt="placeholder image">
		</div>
        <p>كود فوليو منصة عربية تهتم بتطوير مهارات مطورين الويب من خلال تدريبهم على مشاريع صغيرة ومتوسطة وكبيرة ضمن مجالات متنوعة ، تتم إضافة مشاريع وتاسكات يومية وتتم متابعة جودتها من خلال آراء المستخدمين وتحسينها وتطويرها بشكل يومي، كما ونقدم لكم كورسات متعددة لتعلم تطوير الويب وبتكلفة مميزة وبجودة تدريس عالية</p>
        <div>
            <a href="{{ route('index.index') }}">ابدأ الآن</a>
            <a class="a2" href="{{ route('informations.index') }}">عن مطور الموقع</a>
        </div>
	</div>
</body>
</html>
