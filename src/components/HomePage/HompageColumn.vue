<template>
 	<section class='hp-column'>
 		<div class='jyCat-container'>
 			<router-link to="/campaign/yjjc" tag="div">
 				<img src='http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/column/column-1.jpg'>
 				<p>邀请有奖</p>
 			</router-link>
 			<router-link to="/campaign/dhmgl" tag="div">
 				<img src='http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/column/column-2.jpg'>
 				<p>兑换码</p>
 			</router-link>
 			<router-link to="/campaign/xymbj" tag="div">
 				<img src='http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/column/column-3.jpg'>
 				<p>分享有礼品</p>
 			</router-link>
 			<router-link to="/campaign/hyyq" tag="div">
 				<img src='http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/column/column-4.jpg'>
 				<p>好友签到</p>
 			</router-link>
 		</div>
 	</section>
</template>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="less">
.hp-column{
	display:flex;
	width:100%;
	margin-top:10px;
	padding-top:10px;
	padding-bottom:10px;
	align-items:center;
	background-color:#fff;
	.jyCat-container{
		display:flex;
		justify-content:space-between;
		&>div{
			text-align:center;
		}
	}
	img{
		display:block;
		width:.5rem;
		height:.5rem;
		margin-left:auto;
		margin-right:auto;
	}
	p{
		font-size:.14rem;
		margin-top:8px;
		font-weight:bold;
		color:#a5a5a5;
	}
}

</style>
