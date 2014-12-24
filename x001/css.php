<?php header('Content-type: text/css'); ?>
#x-app {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	height: 100%;
	left: 0px;
	position: absolute;
	top: 0px;
	width: 100%;
	overflow: hidden;
	-webkit-flex-direction: column;
	-webkit-align-items: stretch;
}

#x-app > nav {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	height: 50px;
	padding: 0px 3%;
	min-width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 100;
	background-image: url('menubg.png');
	border-bottom: 1px solid rgba(0, 0, 0, 0.5);

	-webkit-box-shadow: rgba(0, 0, 0, 0.7) 0px 0.3em 1em;
	box-shadow: rgba(0, 0, 0, 0.7) 0px 0.3em 1em;
	text-align: right;
	background-position: 50% 100%;
	text-align: center;
}

#x-app > nav > figure {
	background-image: url('logobg.png');
	background-repeat: no-repeat;
	height: 150px;
	margin: 0;
	min-width: 230px;
	position: relative;
	float: left;
}

#x-app > nav > figure > .x-menu-item {
	cursor: pointer;
	height: 100%;
	max-width: 230px;
	text-align: center;
}

#x-app > nav > .links {
	float: right;
	min-width: 270px;
	margin: 0 auto;
}

#x-app > nav > .links > .x-menu-item {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	color: rgba(255, 255, 255, 0.952941);
	cursor: pointer;
	display: inline-block;
	font-variant: small-caps;
	font-size: 1.2rem;
	line-height: 50px;
	font-family: 'Lucida Grande';
	height: 50px;
	text-shadow: rgba(0, 0, 0, 0.498039) 0px 1px 1px;
	padding: 0px 1%;
}

#x-app > nav > .x-menu-item:hover {
	text-decoration: underline;
}

#x-app #x-body {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	display: -webkit-flex;
	height: 100%;
	width: 100%;
}

#x-app .x-page {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	float: left;
	min-width: 100%;
	height: 100%;
	overflow: scroll;
	-webkit-overflow-scrolling: touch;
	text-align: center;

	-webkit-transition: -webkit-transform 0.3s 0.07s;
	-moz-transition: -moz-transform 0.3s 0.07s;
	-o-transition: -o-transform 0.3s 0.07s;
	-ms-transition: -ms-transform 0.3s 0.07s;
	transition: transform 0.3s 0.07s;
	padding-top: 50px;
}

/* PAGE HEADER */
#x-app .x-page > header {
	border-bottom: 1px solid rgba(0, 0, 0, 0.9);

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	background-image: url('head.jpg');
	background-position: 50% 100%;

	-webkit-box-shadow: rgba(0, 0, 0, 0.701961) 0px 0.3em 1em;
	box-shadow: rgba(0, 0, 0, 0.701961) 0px 0.3em 1em;
	min-height: 100px;
	width: 100%;
}

#x-app .x-page > header::before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	background-image: url('dainiuslenis.png');
	background-position: 90% 90%;
	background-repeat: no-repeat no-repeat;
	content: '';
	min-height: 100px;
	margin: 0 auto;
	width: 768px;
}

#x-app .x-page[data-slide="2"] > header,#x-app .x-page[data-slide="2"] > header::before {
	min-height: 14em;
}

#x-app .x-page > article {
	background-image: url('pattern.content.jpg');

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	color: rgba(255, 255, 255, 0.9);
	cursor: default;
	display: block;
	font-size: 0.9rem;
	line-height: 1.6rem;
	font-family: 'Lucida Grande';
	padding: 2% 7%;
	text-align: right;
	text-shadow: rgba(0, 0, 0, 0.498039) 0px 1px 1px;
	width: 100%;
}

#x-app .x-page[data-slide="1"] > article {
	padding: 3% 7%;
	text-align: center;
	height: auto;
}

#x-app article > section {
	display: block;
	margin: 0px auto;
	max-width: 800px;
	width: 100%;
}

#x-app .x-page[data-slide="1"] #x-gallery {
	display: block;
}

#x-app .x-page[data-slide="1"] #x-gallery img {
	max-width: 90%;

	-webkit-box-shadow: rgba(0,0,0,1) 0 1px 5px;
	box-shadow: rgba(0,0,0,1) 0 1px 5px;
	border: 3px solid rgba(0,0,0,1);
}

#x-app .x-page > article ul {
	padding: 0px;
	list-style-type: none;
}

#x-app > footer {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	background-image: url(footer.jpg);
	cursor: default;
	display: block;
	height: 7.1%;
	width: 100%;
	background-position: 50% 0%;
}

#x-app[data-slide="1"] .x-page {
	-webkit-transform: translate(0px, 0px);
	-moz-transform: translate(0px, 0px);
	-o-transform: translate(0px, 0px);
	-ms-transform: translate(0px, 0px);
	transform: translate(0px, 0px);
}

#x-app[data-slide="2"] .x-page {
	-webkit-transform: translate(-100%, 0px);
	-moz-transform: translate(-100%, 0px);
	-o-transform: translate(-100%, 0px);
	-ms-transform: translate(-100%, 0px);
	transform: translate(-100%, 0px);
}

#x-app[data-slide="3"] .x-page {
	-webkit-transform: translate(-200%, 0px);
	-moz-transform: translate(-200%, 0px);
	-o-transform: translate(-200%, 0px);
	-ms-transform: translate(-200%, 0px);
	transform: translate(-200%, 0px);
}

#x-app[data-slide="4"] .x-page {
	-webkit-transform: translate(-300%, 0px);
	-moz-transform: translate(-300%, 0px);
	-o-transform: translate(-300%, 0px);
	-ms-transform: translate(-300%, 0px);
	transform: translate(-300%, 0px);
}

@media (max-width: 768px) and (orientation: portrait) {
	/* resposive css */
}

@media (max-width: 640px) and (orientation: portrait) {
	/* resposive css */
}

@media (max-width: 480px) and (orientation: portrait) {
	/* resposive css */
#x-app > nav > figure {
	-webkit-background-size: 115px 75px;
	-moz-background-size: 115px 75px;
	background-size: 115px 75px;
	height: 75px;
	margin: 0;
	min-width: 115px;
	position: relative;
	float: left;
}

#x-app > nav > figure .x-menu-item {
	cursor: pointer;
	height: 100%;
	max-width: 115px;
	text-align: center;
}

#x-app nav > figure img {
	height: 52px;
	width: 61px;
}

}

@media (max-width: 960px) and (orientation: landscape) {
	/* resposive css */
}

@media (max-width: 800px) and (orientation: landscape) {
	/* resposive css */
#x-app .x-page > header,#x-app .x-page > header::before {
	display: none;
}

#x-app > nav > figure {
	-webkit-background-size: 115px 75px;
	-moz-background-size: 115px 75px;
	background-size: 115px 75px;
	height: 75px;
	margin: 0;
	min-width: 115px;
	position: relative;
	float: left;
}

#x-app > nav > figure .x-menu-item {
	cursor: pointer;
	height: 100%;
	max-width: 115px;
	text-align: center;
}

#x-app nav > figure img {
	height: 52px;
	width: 61px;
}

}

@media (max-width: 320px) {
	/* resposive css */
#x-app > nav > figure {
	display: none;
}

#x-app > nav > .links {
	float: none;
}

}
