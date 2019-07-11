
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>QUỆ DÂM ĐÃNG</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css" media="screen">
    	@charset "utf-8";
* {
	margin: 0;
	padding: 0;
	pointer-events: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-o-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
body{
	position: relative;
    background-color: #000;
    overflow: hidden;
}
dl {
	width: 230px;
	height: 340px;
	position: relative;
	margin: 150px auto 0;
	-webkit-transform-style: -webkit-preserve-3d;
	transform-style: preserve-3d;
}
dd {
	width: 230px;
	height: 340px;
	position: absolute;
	top: 0;
	left: 0;
}
img{width:100%;height:100%;}
dt {
	width: 900px;
	height: 900px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%) rotateX(90deg) translateZ(-200px);
	background: -moz-radial-gradient(center center,farthest-side,#fff5,#0005);
	background: -webkit-radial-gradient(center center,farthest-side,#fff5,#0005);
	background: -o-radial-gradient(center center,farthest-side,#fff5,#0005);
	background: radial-gradient(center center,farthest-side,#fff5,#0005);
}
.inverteds {
	transform: scaleY(-1);
	position: absolute;
	left: 0;
	top: 370px;
	width: 230px;
	height: 340px;
	opacity:0.5;
}
.inverted {
	position: relative;
	width: 230px;
	height: 340px;

}
.inverted::before {
	content: '';
	display: block;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: -moz-radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
	background: -webkit-radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
	background: -o-radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
	background: radial-gradient(bottom,circle farthest-side,#0000,#000 66%);
}
.name{
	color: #fff;
	text-align: center;
	margin-top: 80px;
	font-size: 50px;
}
.content-carrousel{
    width: 100%;
    position: absolute;
    float: right;
    animation: rotar 15s infinite linear;
    transform-style: preserve-3d;
}

.content-carrousel:hover{
    animation-play-state: paused;
    cursor: pointer;
}
@keyframes rotar{
    from{
        transform: rotateY(0deg);
    } to{
        transform: rotateY(360deg);
    }
}
@media(min-width: 300px){
	dd {
		width: 200px;
		height: 310px;
		position: absolute;
		top: 0;
		left: 0;
	}
}
@media(min-width: 1200px){
	dd {
		width: 230px;
		height: 340px;
		position: absolute;
		top: 0;
		left: 0;
	}
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery.min.js" type="text/javascript"></script>

<body>
    <dl>
        <dt></dt>
        <div class="content-carrousel">
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.15752-9/66517285_744196235996710_6801321819795095552_n.jpg?_nc_cat=105&_nc_eui2=AeEjEzVG4nzkX7SuxNsFN5glNjsPyqYIVtNGrP89vrbu9a3zKzLVJhBRKhRk7ma8x36Z3-Osp_F47kCT8DK-YAeANHpN0lTQ7ArmMPH_GfOOlw&_nc_oc=AQl6jkutO3p7bV0gvGaPnO38wvqmJ97WxsPFEWtw7qNhKASkhBKKyEIemThoYM2Dqn_mkNVOVq7Tm4F_iTrik0of&_nc_ht=scontent.fdad1-1.fna&oh=24f71842555daed00b0ef2082d5fbb1a&oe=5DB28FB4" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.15752-9/65304587_552638361935793_6933244192718061568_n.jpg?_nc_cat=107&_nc_eui2=AeEkUiCe4g-5EArXGN7y3x68wfvO4p1wCpMTX5XSHoTdbq6Fz7av6lElyW7CeZSw58ciJEhtVvDzG9BGZQl0I9GPwbP3AxM0R_hBS1GfQtROLg&_nc_oc=AQna0gNRzhdz9j2APk-GobFhGFbBFLuchV2gr1_qEs2WkZmo5PaQ4bZTDt56Ec8BRXZbxtgjGfZOY8brF0rwQiB0&_nc_ht=scontent.fdad2-1.fna&oh=e78a9f375a2b0c65939e0d8f8184009c&oe=5DA73F4B" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.15752-9/66357327_2412599529016995_1718138002464571392_n.jpg?_nc_cat=108&_nc_eui2=AeECnxuCc1eufU4Z66pT1qIRqElWBHLtUvpDMmnsDTTUQBGAtLBRPxn1S25EbbEOfxH9aofp2Gf5a4JVjadE3AS_n_PiDwP7X_naeG8zP9SjcA&_nc_oc=AQkIbOSEnCgMdSsk7C9n7R_xxA2LTVF9hpsrbsfI9g_HlT2SQaFib0O1BzyVqpVPtufGKVAB8m-lYfdJXerI4fN3&_nc_ht=scontent.fdad2-1.fna&oh=48334e6cb6943ab4b48f7a5feeeedbbf&oe=5DB97E1E" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.15752-9/66411985_343642943193768_5507012749172932608_n.jpg?_nc_cat=104&_nc_eui2=AeGJs90MOlZMlPFcvJMDC1AMhxw4L4n6SsiCxw6u4h6YGQYN60qXFlt8L6F4irquH8EWWez8Othx8MBilcz8aNI99iz_c5wdTnDoeXZZhwmFoA&_nc_oc=AQlUJZL8iLLdc6DNiy6mdwQ5A3tK2QKm4jgDA8nISX0EfM24Hnr6i8IH3tDCSu5nnHb2w8qljpjulRm5Fsj8nnhw&_nc_ht=scontent.fdad1-1.fna&oh=875ad1f36ca56319c33ea19da83348d5&oe=5DAA29C5" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.15752-9/66524586_285299622291499_8267424544260620288_n.jpg?_nc_cat=111&_nc_eui2=AeF5Fs8D2JiEHMWDmwvr0XuTI6Q6h3TwYVy41Ry3FsRstrUTpFeDX1LsFnyfVI8qzqQLjkQ2lyvtzIE929jAD7FYx7eT9VCHVi2pQYI55c2Y6Q&_nc_oc=AQkAUpDqdewxYibp6EL8zhjKI96h506IrXvtVBs0xdJcKAf4mPH7Wm0SkG65aEU4Tqx9BfwClfP6E06qhItbcSBE&_nc_ht=scontent.fdad2-1.fna&oh=9808458e532b2c8b868567c8ca3acd8c&oe=5DA90644" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.15752-9/66341030_406367696752782_8949489312487964672_n.jpg?_nc_cat=109&_nc_eui2=AeEbNOfnh-7E4VW56BmTMYjldiEOMpY91wpibCLUZY1daE1UbpPTgtQw2Wb4RnSmn40xbF9-ldKd_yt7iyFhTc7hXQjnJdNRgvqk1ZlItg_Peg&_nc_oc=AQldxqD3l9yeVWcfrdJ9Yh7I97gFnRk21A8xjIvvH50q0XzZzfoY0hhKCfc-Q8sZR--PgtALnE7rtkWV-WOCgM4G&_nc_ht=scontent.fdad2-1.fna&oh=8f7f0dbd446eb17b76a98b8e7509da8b&oe=5DADFADB" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.15752-9/64562209_465060467587950_510996414101192704_n.jpg?_nc_cat=103&_nc_eui2=AeE8VKZqzktrrIgysMWgHevff4-ktupoy-4vlqlhax2_HfQ6i9TXFrnGlXhFJD9QVXZDkIFFamCj_LxvDxswmuvkQHJsTpxGM3O8ACC3vhDe2g&_nc_oc=AQlMd8_N84fa5Qmcp1WVsyQTNn3P7vMHbJikSNQdItbz5oEWzLhlRBUmxpnkCKrs8u1lF7E2zk5VJLYtkYO0IQ0f&_nc_ht=scontent.fdad1-1.fna&oh=3c8c2a66e407dd74469c91b57248b248&oe=5DB9D365" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.15752-9/61733858_402416663697703_4388701744599662592_n.jpg?_nc_cat=100&_nc_eui2=AeGO3OYQG2sRYyNxJUxfKU1ESsPS4Xmc8ioF-ZbxyC7Jzyx56T-n_0p0k00olaM2abrAYDbAWHAPSaHXC-TZtcoPyg8Zt8m3igkL18qyz8yqUw&_nc_oc=AQluB5pgN10QIT8JhADEIsgdjudrxX0nl0zAwcSqxmNL64-MnKs3ZZ4UGzH07cTlfkM3s6yIrdD2Qf2VMGUOAt-2&_nc_ht=scontent.fdad1-1.fna&oh=5455c9afd2cb335a0c72e058995e681c&oe=5DC42709" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.15752-9/60401479_343941229656352_6378046835654656000_n.jpg?_nc_cat=106&_nc_eui2=AeFe631PLhv4cEt4_UO7NhJyDRfP3CdgjU9nkrIBaPRzeBa2DyqbhH3luxBL9RkKeZ4wisamjFzIalRdPHlGGncAOG1pQreh8wRZ5RsX3Bczqg&_nc_oc=AQkwU7E_rkToQ9jAneqNuN7nq3C0Q1mReJlmzro40b68ovOi7-AIMz_aPbPgbONgeyBUS1AJu0WcAQUMULEGsUSE&_nc_ht=scontent.fdad1-1.fna&oh=fcee41ba4b78cca16dd837bbc271dd16&oe=5DAE37F1" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.15752-9/60003623_305977630294709_5381839934535499776_n.jpg?_nc_cat=111&_nc_eui2=AeEMFwVNiHJ6djBdvtFWKeQNwojSNJDHQUWnqEB4yTzZJm5EOz4Y4GOaWN8OfiLvwnonKupjr5r3FB4ggCfl96wa2rSgu-A1zEWYy31bCzuJ6Q&_nc_oc=AQkhlYWuCwqATyKAIJcpHLKGg5E1dwD5Ire6Hlqk-Ob-5FlQ0MQ5Pdsab1L4ttnKZwAODyj1VLm2MwM_GRybrorI&_nc_ht=scontent.fdad2-1.fna&oh=101ae96831a327dbc9c7966753016134&oe=5DB53E01" /></dd>
        </div>
    </dl>
    <div class="name">Á HIHI</div>
    <embed src="silence.mp3" type="audio/mpeg" autostart="true" hidden="true">
        <audio id="player" autoplay loop>
            <source src="1.mp3" type="audio/mpeg">
        </audio>

    
  
    <script type="text/javascript" src="script.js"></script>
</body>
</head>
</html>