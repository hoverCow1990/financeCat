<template>
 	<section class='hp-projectList'>
 		<ul class='list' v-if='isShowList'>
 			<li v-for='(item, index) in getProjects' class='project'>
 				<div class='canvas-bg'></div>
 				<div class='jyCat-container'>
 					<div class='project-detail'>
 						<caption class='title'>{{item.title}}</caption>
 						<div class='profit'>
 							<div class='profit-info'>
 								<p><span>{{item.profit}}</span><span>预期年化收益率</span></p>
 							</div>
 							<div v-if='item.type === "b"' class='profit-date'>
 								<span>{{item.day}}</span>天
 							</div>
 						</div>
 					</div>
 					<div class='project-line' v-if='item.type === "b"'>
 						<span v-bind:style="{width:item.rate+'%'}"></span>
 					</div>
 					<div class='project-des'>
 						<p>{{item.des}}</p>
 						<span v-if='item.type === "a"'>{{item.start}}</span>
 						<span v-else>{{item.surplus==0?'已售罄':'剩余' + item.surplus + '份'}}</span>
 					</div>
 				</div>
 				<div class='animate-cat' v-if='item.type === "a"'>
 					<img class='cat' src="http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/projects/catHead.png">
 					<img class='redPacket-1' src="http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/projects/redPacket-1.jpg">
 					<img class='redPacket-2' src="http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/projects/redPacket-2.jpg">
 					<img class='coin' src="http://www.web-jackiee.com/templets/blog/demo/publicImage/financeCat/projects/coin.png">
 				</div>
 			</li>
 		</ul>
 	</section>
</template>
<script>
import {mapGetters, mapActions} from 'vuex'
export default {
	data () {
		return {

		}
	},
	created () {
		this.requestProject(() => {

		});
	},
	computed: Object.assign(mapGetters([
		'getProjects'
	]),{
		isShowList () {
			return this.getProjects.length > 0;
		},
		getMoreDes (type) {
			console.log(type + '2');
		}
	}),
	methods: Object.assign(mapActions([
		'requestProject'
	]),{

	})
} 
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="less">
.hp-projectList{
	margin-top:10px;
	.canvas-bg{
		position:absolute;
		width:100%;
		height:100%;
		top:0;
		left:0;
	}
	.jyCat-container{
		position:absolute;
		overflow:hidden;
	}
	.project{
		display:flex;
		position:relative;
		height:100px;
		padding-top:16px;
		padding-bottom:16px;
		justify-content:center;
		background-color:#fff;
		&:not(:first-child){
			margin-top:10px;
		}
		&:nth-child(1){
			.project-des:before{
				background-color:#f8b551;
			}
			.project-des span{
				margin-right:.3rem;
			}
			.profit-info{
				border-bottom:1px solid #efefef;
			}
		}
		&:nth-child(2){
			.project-des:before{
				background-color:#7ecef4;
			}
		}
		&:nth-child(3){
			.project-des:before{
				background-color:#8f82bc;
			}
		}
		&:nth-child(4){
			.project-des:before{
				background-color:#bfbfbf;
			}
		}
	}
	.project-detail{
		.title{
			display:block;
			text-align:left;
			font-size:15px;
			font-weight:bold;
			color:#6f6f6f;
		}
		.profit{
			display:flex;
			justify-content:space-between;
			margin-top:20px;
		}
		@infoPadding :6px;
		.profit-info{
			padding-right:.3rem;
			padding-bottom:@infoPadding;
			p{
				height:30px;
				line-height:30px;
			}
			span{
				vertical-align:bottom;
			}
			span:first-child{
				position:relative;
				display:inline-block;
				width:80px;
				margin-right:10px;
				font-size:30px;
				color:#ff630d;
				&:after{
					position:absolute;
					content: '%';
					right:0;
					bottom:0;
					font-size:16px;
					line-height:21px;
					color:#ff630d;
				}
			}
			span:last-child{
				display:inline-block;
				color:#999;
				font-size:12px;
				line-height:19px;
			}
		}
		.profit-date{
			height:30px;
			padding-bottom:@infoPadding;
			font-size:12px;
			line-height:30px;
			color:#999;
			span{
				margin-right:10px;
				font-size:26px;
				color:#636363;
			}
		}
	}
	.project-line{
		width:100%;
		height:3px;
		background-color:#e5e5e5;
		span{
			display:block;
			height:100%;
			background-color:#ffae14;
		}
	}
	.project-des{
		display:flex;
		position:relative;
		margin-top:10px;
		padding-left:14px;
		justify-content:space-between;
		font-size:12px;
		color:#999;
		&:before{
			position:absolute;
			content:'';
			width:8px;
			height:8px;
			left:0;
			top:3px;
			border-radius:50%;
		}
	}
	.animate-cat{
		position:absolute;
		width:1rem;
		height:90px;
		right:.42rem;
		top:0;
		img{
			position:absolute;
		}
		.cat{
			width:.8rem;
			top:-.2rem;
			right:.03rem;
			z-index:3;
		}
		.redPacket-1{	
			width:.9rem;
			bottom:.42rem;
			right:0;
			z-index:1;
		}
		.redPacket-2{	
			width:.9rem;
			bottom:0;
			right:0;
			z-index:3;
		}
		.coin{
			width:.3rem;
			height:.3rem;
			right:.06rem;
			transform:translate3d(-3px,-2px,0);
			opacity:1;
			animation:coin 3.2s ease-out infinite;
			z-index:2;
		}
		@keyframes coin{
			0% {
				transform:translate3d(-3px,-2px,0);
				opacity:0;
			}
			50% {
				transform:translate3d(-3px,-2px,0);
				opacity:1;
			}
			75% {
				transform:translate3d(-3px,-2px,0);
				opacity:1;
			}
			100%{
				transform:translate3d(-10px,60px,0);
				opacity:.7;
			}
		}
	}
}

</style>
