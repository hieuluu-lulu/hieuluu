
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
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/53267080_113711149785384_1703288457981329408_n.jpg?_nc_cat=101&_nc_eui2=AeFvteil0ZbcSCGsGel_ISJNv2yhRANHlcr8HVBDv5igEKypD9bVqo3DhNgMryUFR-hGEEGGyGSHT7s3AoFWF0ki7sMneKZYMV7jluM29GlMVQ&_nc_oc=AQnr5LGum-wtbNBo_PXDZR8gGw7b_atn2Y8p090Ss8DENwy8LM6InpczyjKgWXtUFhH3GgoXXNB8HU9t-Tif7ggX&_nc_ht=scontent.fdad2-1.fna&oh=949f116001b3e9e364e12387952a6a4c&oe=5DA56D32" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/60992134_140619557094543_3824661964701827072_n.jpg?_nc_cat=105&_nc_eui2=AeHukiOWmEgkccvunxr1s_hHP8LEVSo50ODTaCc6R1-BTzbG1zCbyFmv3gD6jzC7u2cTZ5RlDuOYniPr76BUgBu9Cg3sgB2kZyk-833NUC0oWg&_nc_oc=AQlZUuHbNxjRSluWOEiDBjTc9aKP2cyBQNtMNdOfVCSmzH8gw_fAENQeskQO4O--_v12qW7A-sM4bnrRps9WpoYa&_nc_ht=scontent.fdad1-1.fna&oh=ef973f72c2381a5aa54487cf9e2fef00&oe=5DBADB8A" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/61046438_140619523761213_323431657526788096_n.jpg?_nc_cat=108&_nc_eui2=AeGxjDWmgf8XMP2D1AEVmL-Pidpqp0asufMU44XMmoNRfjh5xn5_W9NTZQjyM2hCZiS4hfXbKs44u1OH3GZiT8W4ibzd-rOs4o_T0EVYOxKA6Q&_nc_oc=AQntjuqPLJP7RTV6i7ahrc8oVX1CVjLaAvUv02Aeh8VBBX4H_3Bzioq41bZ_Exc5G2MXGR2C5VX2z5TEZVP-A252&_nc_ht=scontent.fdad2-1.fna&oh=f86db52e41ea438640d46af27e479215&oe=5D794227" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/59995391_137317744091391_8475255447618584576_n.jpg?_nc_cat=111&_nc_eui2=AeEVovM4E_UrYM8PR3zykY-__jcVLc6LJC5q0tAWjEkikQ13zvbsj2MJF4aeqKkWIzhpwGb7h4CxRhxK8so1jxz_KyxmQeKpC9HIR8uDmX2ipA&_nc_oc=AQnoDECJdYcciFbEVpV1vdnhcQF0NWmtl7nrn6FrCWoMF0UAvcfR0wX4SyklkPkf1lZg_MRBnMchmKF6ptfWXuzj&_nc_ht=scontent.fdad2-1.fna&oh=9713b1237b0c0f9ee3e887721d8004b9&oe=5DA9AD89" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/59640453_136887360801096_7373921864650850304_n.jpg?_nc_cat=102&_nc_eui2=AeGQuCy-LGCii7IhWkOS6t_NM0RSdS14sRcaxFwfcvDQ7bdH89Cbhr_8XTrGZWiEcLPxCGZYw8oBDusIKLag-VWdawW493rYjfvxZF4FTXJwyA&_nc_oc=AQlKrnJ5ULvXTX-Efq9TOMpc9dszRZu7-RoeihAqg52CmtRplcZkW0_xkwyIs2U5wZuKQu2sRqLw_ISRnyyCj_Tx&_nc_ht=scontent.fdad1-1.fna&oh=9f671691120db9d749dd187b6040f5dd&oe=5DB97A41" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/55666825_122544265568739_7376643692800507904_n.jpg?_nc_cat=101&_nc_eui2=AeFQru8lie31YMXYDtkVlWRaEm91Ml5Ta4YoBXJfNbADxZ1-EB1dBfjqQ7oxJKLeRfVdFiTIj-pKd0u_iR4ZnsHjzsAjvIQKusrqRnr--_P44Q&_nc_oc=AQllFfB8ooVOpuY5c7bjvrpycc4sld9t3sqmW92ArlojMOQt86akcxBhAKodA2_lPDtKaV3uuurGVbOisC96dVyj&_nc_ht=scontent.fdad2-1.fna&oh=836fb814bae1ba343b1159d2ca102157&oe=5DC12A3C" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/65771121_152296605926838_1356382278741131264_n.jpg?_nc_cat=111&_nc_eui2=AeEh69AfLXlZqLY_ryzbJvYR7fet0gg_HRlRQEGn052IEtiak-nLxF639L8lJBOk_pL0o4Om6YUH1SQ0KB2S65Hgop35KUUGZJi5AYjNws13MQ&_nc_oc=AQmZAYXdd0zehLdqmAfDG9dIAnRyu4CHBDxZO10NPap1DLot-nBH57q6I4aaMk_6LKlUSfd3lW8QihH5PVTC8q3v&_nc_ht=scontent.fdad2-1.fna&oh=acbdb97a9a1ddcc882cdeb7cea75d989&oe=5DB362A1" /></dd>
            <dd><img src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-1/64498206_147840419705790_8466411461416058880_n.jpg?_nc_cat=109&_nc_eui2=AeFijt0ARGeLpRisnM0cC41l3sHfZwm5Pl2W7a4irDOAIK0llYFXEfhOKdn4Y7SdK29L52_-4rYZHeHmeHO6Zxoah8N5hGukVhN1bzW2ZyM7_g&_nc_oc=AQkV6wsZHRxgR5rH_qgFGO3ep39QqaHyN7i6fna0F738YYydV9Samam4Au3RFICaUfKyhU9znm5JIowLPojQJWik&_nc_ht=scontent.fdad2-1.fna&oh=a38ac6718cdedd7696bc4163888235ee&oe=5DBA7D54" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/53327597_112423839914115_2453020350057807872_n.jpg?_nc_cat=100&_nc_eui2=AeFngoUto4t3HhIOBCFPGqOEFXm8ZVOlcQ-dhHf5nyVkS7DlTPXh_4eMzEg97dIyO5raJ57MwQkwqk0NqVmGjZvFt8xChYkrHt2i3BcBUc8hMQ&_nc_oc=AQmAC6lUY6Qp7gkiY41OvDoodS6hNOJV-G8-gFlAPbgq-4JYuPyUYoHruu_NXejTISt6Dc7CicULO6dFXPWpr1rG&_nc_ht=scontent.fdad1-1.fna&oh=e8e446e5066ea9606ffe4f3e3b50d99e&oe=5DB53D37" /></dd>
            <dd><img src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/65868068_150655609424271_3402242220219170816_n.jpg?_nc_cat=106&_nc_eui2=AeHrrnsPLmI9bmRXp_RomnC5XOncQMvDTHy-FUMjV6WxDSo9WX2vGHoXnwJ0IsyUwBanZFook-uefW4Sk6RmolU7VZNpTnKgUPUFj8SfFqLQFg&_nc_oc=AQn4pHRN8A3-7R3F3I8M0VnPtC_QgqruRNWMgQ85_rbOur0zz-bE8qId7ZjdDuaQIei5JZXivn9Mro1ho3Z4uDAy&_nc_ht=scontent.fdad1-1.fna&oh=c85d87e5e96e9d2db490b418b4c77c6a&oe=5DAF8A3C" /></dd>
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