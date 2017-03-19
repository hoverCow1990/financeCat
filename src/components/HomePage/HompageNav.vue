<template>
 	<nav class='hp-nav' v-bind:class='isNavShow?"active":""'>
 		<div class='jyCat-container'>
 			<div class='nav-lt'>
 				<img src='../../assets/images/logo.jpg'>
 				<div class='nav-info'>
 					<div class='title'>金银猫理财</div>
 					<p>jinyinmao.com.cn</p>
 				</div>
 			</div>
 			<div class='nav-gt'>
 				<p>总资产<span>{{getBalance}}元</span></p>
 			</div>
 		</div>
 	</nav>
</template>

<script>
import {mapGetters, mapActions} from 'vuex'

export default {
	data () {
		return {
			isNavShow : false,
		}
	},
	computed : Object.assign(mapGetters([
		'getBalance',
	]),{
	}),
	mounted(){
		var top,par = this.$el.parentNode;
		window.addEventListener('scroll',() =>{
			if(par.getBoundingClientRect().top < -100){
				console.log(this.isNavShow)
				if (this.isNavShow == false) this.isNavShow = true;
			}else{
				if (this.isNavShow == true) this.isNavShow = false;
			}
		})
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="less">
@orange : #ff6a19;
.hp-nav{
	position:fixed;
	width:100%;
	top:0;
	left:0;
	z-index:999;
	transform:translate3d(0,-50px,0);
	transition: .4s cubic-bezier(.45,.77,.55,.26);
	&.active{
		transform:translate3d(0,0,0);
	}
	.jyCat-container{
		height:100%;
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	.nav-lt{
		display:flex;
		height:36px;
		align-items:center;
		img{
			display:block;
			height:100%;
			float:left;
			margin-right:5px;
		}
	}
	.nav-gt{
		font-size:15px;
		font-weight:bold;
		color:#7a7a7a;
		span{
			margin-left:5px;
			color:@orange;
		}
	}
	.nav-info{
		display:flex;
		width:105px;
		height:32px;
		float:left;
		align-items:space-between;
		flex-wrap:wrap;
		.title{
			font-size:16px;
			font-weight:bold;
			color:@orange;
			letter-spacing:2px;
		}
		p{
			margin-top:4px;
			font-size:12px;
			color:#999;
		}
	}
}

</style>
