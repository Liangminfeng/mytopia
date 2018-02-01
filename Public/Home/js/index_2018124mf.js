// 轮播图开始
// var left = $('.content_middle .btnLeft');//获取左点击
// var right = $('.content_middle .btnRight');//获取右点击
//

//   // 手动切换
// aSmall.hover(function(){
// var n = $(this).index();
// iNow = n;
// tanA();
// if (iNow == 1) {
// 	document.getElementById('dd2').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd3').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd4').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd5').src = "./Public/Home/img/42.png";
// }else if (iNow == 2) {
// 	document.getElementById('dd3').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd4').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd5').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd1').src = "./Public/Home/img/42.png";
// }else if (iNow == 3) {
// 	document.getElementById('dd4').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd5').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd1').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd2').src = "./Public/Home/img/42.png";
// }else if (iNow == 4) {
// 	document.getElementById('dd5').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd1').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd2').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd3').src = "./Public/Home/img/42.png";
// }else if (iNow == 5) {
// 	document.getElementById('dd1').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd2').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd3').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd4').src = "./Public/Home/img/42.png";
// }else{
// 	document.getElementById('dd1').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd2').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd3').src = "./Public/Home/img/42.png";
// 	document.getElementById('dd4').src = "./Public/Home/img/42.png";
// }
//
// });
// function tanA(){
// 	if (iNow == 1) {
// 		document.getElementById('dd2').src = "./Public/Home/img/42.png";
// 		document.getElementById('dd3').src = "./Public/Home/img/42.png";
// 		document.getElementById('dd4').src = "./Public/Home/img/42.png";
// 		document.getElementById('dd5').src = "./Public/Home/img/42.png";
// 	}
// 	// alert(iNow);
// 	var imgs = iNow - 1;
// 	var imgq = iNow - 2;
// 	var shu = 'dd'+imgs;
// 	var sha = 'dd'+imgq;
// 	// alert(iNow);
// 	if (imgs == 5) {
// 		// alert(1);
// 		aSmall.eq(5).removeClass('on1');
// 		document.getElementById('dd4').src = "./Public/Home/img/42.png";
// 	}
// 	aLi.eq(iNow).fadeIn(1000).siblings().fadeOut(1000);
// 	aSmall.eq(iNow).addClass('on1').siblings().removeClass('on1');
// 	// $("#".shu).attr('src','./Public/Home/img/41.png');
// 	document.getElementById(shu).src = "./Public/Home/img/41.png";
// 	document.getElementById(sha).src = "./Public/Home/img/42.png";
// }


