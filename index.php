
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }

        #menu {
            position: fixed;
            top: 0;
            right: -250px;
            width: 250px;
            height: 100%;
            background-color: #000;
            color: #fff;
            text-align: left;
            transition: right 0.3s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #menu ul {
            list-style: none;
            padding: 0;
        }

        #menu ul li {
            padding: 15px;
        }

        #slider-button {
            position: absolute;
            top: 20px;
            right: 0;
            width: 40px;
            height: 40px;
            background-color: #000;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #slider-icon {
            font-size: 24px;
            color: #fff;
        }

        #menu.show {
            right: 0;
        }

        #slider-button.expanded {
            right: -40px;
        }

        #back-button {
            position: absolute;
            top: 70px;
            right: 0;
            width: 250px;
            background-color: #000;
            color: #fff;
            text-align: left;
            display: none;
        }

        #back-button.show {
            display: block;
        }

        #back-button a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
        }

        #back-button a:hover {
            background-color: #333;
        }

        #close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        #close-icon {
            font-size: 24px;
            color: #fff;
        }
    </style>
    <title>Navigation Menu</title>
</head>
<body>
    <div id="menu">
        <div id="close-button">
            <div id="close-icon">✕</div>
        </div>
        <ul>
            <li><a href="disc.php
">Disclamier</a></li>
            <li><a href="https://t.me/DEVSNP ">join Our tg Channel</a></li>
            <li><a href="/yt">Back to Homepage</a></li>
        </ul>
    </div>
    <div id="slider-button">
        <div id="slider-icon">☰</div>
    </div>
    <script>
        const menu = document.getElementById('menu');
        const sliderButton = document.getElementById('slider-button');
        const backButton = document.getElementById('back-button');
        const closeButton = document.getElementById('close-button');

        sliderButton.addEventListener('click', () => {
            menu.classList.toggle('show');
            sliderButton.classList.toggle('expanded');
            backButton.classList.toggle('show');
        });

        closeButton.addEventListener('click', () => {
            menu.classList.toggle('show');
            sliderButton.classList.toggle('expanded');
            backButton.classList.toggle('show');
        });

        backButton.addEventListener('click', () => {
            menu.classList.toggle('show');
            sliderButton.classList.toggle('expanded');
            backButton.classList.toggle('show');
        });
    </script>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>YT</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<style>
		body { background: #eaedf2; font-family: 'Roboto', sans-serif; margin: 0; padding: 0; } #title {font-weight: bold; font-size: 28px; color: #333; text-align: center; margin: 20px 0; padding: 10px 20px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.2); } .center { text-align: center; } .custom-btn { width: 130px; height: 40px; color: #fff; border-radius: 5px; padding: 10px 25px; font-family: 'Lato', sans-serif; font-weight: 500; background: transparent; cursor: pointer; transition: all .3s ease; position: relative; display: inline-block; box-shadow: inset 2px 2px 2px 0 rgba(255,255,255,.5), 7px 7px 20px 0 rgba(0,0,0,.1), 4px 4px 5px 0 rgba(0,0,0,.1); outline: 0; } .btn-11 { border: white; background: gray; background: linear-gradient(80deg, gray 0, gray 100%); color: #fff; overflow: hidden; } .btn-11:hover { text-decoration: none; color: #fff; background-image: linear-gradient(135deg, red 0, purple 64%); } .btn-11:active { box-shadow: 4px 4px 6px 0 rgba(255,255,255,.3), -4px -4px 6px 0 rgba(116,125,136,.2), inset -4px -4px 6px 0 rgba(255,255,255,.2), inset 4px 4px 6px 0 rgba(0,0,0,.2); }
	</style>
</head>
<body>
	<div class="center">
		<a href="">
			<button id="title"> YT DOWNLOADER BY NEPDEVS</button>
		</a>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="./css/style.css" type="text/css" />
		<link rel="stylesheet" href="./css/responsive.css" type="text/css" />

		<!-- Primary Meta Tags -->
		<title>YouTunnel - YouTube video downloader</title>
		<link rel="icon" type="image/x-icon" href="./assets/images/tl.webp" />
		<meta name="title" content="YouTunnel - YouTube video downloader" />
		<meta
			name="description"
			content="Download any YouTube video in all available qualities and formats!"
		/>

		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://youtunnel.vercel.app/" />
		<meta property="og:title" content="YouTunnel - YouTube video downloader" />
		<meta
			property="og:description"
			content="Download any YouTube video in all available qualities and formats!"
		/>
		<meta property="og:image" content="./assets/images/banner.png" />

		<meta property="twitter:card" content="./assets/images/banner.png" />
		<meta property="twitter:url" content="https://youtunnel.vercel.app/" />
		<meta
			property="twitter:title"
			content="YouTunnel - YouTube video downloader"
		/>
		<meta
			property="twitter:description"
			content="Download any YouTube video in all available qualities and formats!"
		/>
		<meta property="twitter:image" content="./assets/images/banner.png" />
	</head>
	<body class="unselectable">
		<div class="main-wrapper cv">
			<div class="inner-controller">
				<div class="close-btn c">
					<i class="bi bi-x"></i>
				</div>
				<div class="yt-info">
					<div class="yt-image">
						<img
							src="./assets/images/tl.webp"
							alt="yt-thumbnail"
							class="yt-info-img"
						/>
						<div class="yt-text">
							<h1 class="yt-title"></h1>
							<div class="cv">
								<img
									src="./assets/images/loading.svg"
									alt="YouTube Icon"
									class="yt-channel-icon"
								/>
								<h4 class="yt-channel-name"></h4>
							</div>
							<div class="yt-d"></div>
						</div>
					</div>
					<div class="download-item"></div>
				</div>
				<div class="loading-screen c">
					<img src="./assets/images/loading.svg" alt="" />
				</div>
			</div>
			<div class="input-wrap c">
				<div class="inner-wrapper">
					<img
						class="main-logo"
						src="http://telegra.ph/file/b320258fe4ad914249644.jpg"
						alt="YouTunnel"
					/>
					<div class="link-box">
						<input
							type="text"
							class="link-input"
							placeholder="Video link here..."
						/>
					</div>
					<p class="intro-description">
						Download any YouTube video in all available qualities and formats!
					</p>

		



	<!-- External CDNs -->
	<script async src="https://cdn.splitbee.io/sb.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>

	<!-- App Scripts -->
	<script src="./js/youtube.js"></script>
	<script src="./js/app.ui.js"></script>
	<script src="./js/app.js"></script>
</html>