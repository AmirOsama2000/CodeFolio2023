<!DOCTYPE html>
<html dir="rtl">
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
			height: 100vh;
		}

		.section {
			display: flex;
			flex-direction: column;
			align-items: center;
			max-width: 80%;
			margin: 0 auto;
			text-align: center;
		}

		.section p {
			margin: 1em 0;
            color: #fff;
            width: 60%;
            font-size: 1.2rem;
            text-align: center;

		}

		.cards {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 2em;
		}

		.card {
			margin: 1em;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
			overflow: hidden;
			transition: all 0.3s ease;
		}

		.card:hover {
			box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
			transform: translateY(-5px);
		}

		.card img {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}

		.card h2 {
			margin: 0.5em;
			font-size: 1.2em;
            text-align: center;
		}

		.card a {
			display: block;
			padding: 0.5em 1em;
			font-size: 1.3em;
			color: #6a0494;
			background-color: #ffc601;
			border-radius: 5px;
			margin: 1em;
			text-align: center;
			transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 500;
		}

		.card a:hover {
			background-color: #6a0494;
            color: #ffc601;
		}

		@media screen and (min-width: 768px) {
			.section {
				max-width: 90%;
				text-align: left;
			}

			.cards {
				margin-top: 3em;
			}

			.card {
				flex-basis: calc(33.33% - 2em);
			}
            p{
                font-size: 1em;
            }
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="section">
			<p>أمير أسامة ، مطور ويب فل ستاك،لدي خبرة اكثر من 3 سنوات في مجال تصميم وتطوير مواقع الويب ، أسعى من خلال هذه المنصة مساعدة زملائي مطورين الويب ومن هم في بداية تعلمهم لهذا المجال
                وهنا أعرض لكم بعضاً من أعمالي التي سعدت بتنفيذها
            </p>
			<div class="cards">
				<div class="card">
					<img src="{{ asset('cms/dist/img/1.jpg') }}" alt="placeholder image">
					<h2>تصميم قاعدة بيانات</h2>
					<a href="#">Read More</a>
				</div>
				<div class="card">
					<img src="{{ asset('cms/dist/img/2.jpg') }}" alt="placeholder image">
					<h2>Card Title 2</h2>
					<a href="#">Read More</a>
				</div>
				<div class="card">
					<img src="{{ asset('cms/dist/img/3.jpg') }}" alt="placeholder image">
					<h2>Card Title 3</h2>
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
    </div>
</body>
</html>
