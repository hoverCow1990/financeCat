<template>
  <div class="hp-carousel" v-if='isShowBanner'>
    <ul class='carousel-perviewer' v-bind:class='[touchSwitch?"":"active"]' v-bind:style='ulStyle' @touchstart='handlerTstart' @touchmove='handlerTmove' @touchend='handlerTend'>
      <li><img v-bind:src=getBanner[getBanner.length-1].url></li>
      <li v-for='(item , index) in getBanner'>
        <img v-bind:src=item.url >
      </li>
      <li><img v-bind:src=getBanner[0].url ></li>
    </ul>
    <ul class='carousel-tab'>
      <li v-for='(item , index) in getBanner' v-bind:class='[index === tabIndex?"active":""]'></li>
    </ul>
  </div>
</template>
<script>
import {baseUrl,bannerConfig} from '../../config/config'
import {mapGetters, mapActions} from 'vuex'
import HompageNav from './HompageNav'
export default {
  data () {
    return {
      showIndex   : 1,
      tabIndex    : 0,
      startX      : 0,
      moveX       : 0,
      touchSwitch : false,
      touchTime   : null,
      timer       : null,
    }
  },
  //窗前该构造函数时,进行请求banner轮播图的信息 请求结束后进行轮播动画
  created (){
    this.requestBanner(() => {
      this.startCarousel();
    });
  },
  computed :  Object.assign(mapGetters([
      'getBanner',
    ]),{
    //是否展示Banner,在数据没有加载完成之前不进行渲染
    isShowBanner(){
      return this.getBanner.length > 0;
    },
    //计算屏幕视窗大小
    clientWidth () {
      return document.documentElement.clientWidth;
    },
    //移动的UL合资的宽度
    ulWidth () {
      return (this.getBanner.length+2) * 100 + '%';
    },
    //移动的UL的left值
    ulLeft () {
      return this.showIndex * this.clientWidth * -1;
    },
    //移动UL的样式
    ulStyle () {
      return {
        width  : this.ulWidth,
        transform : 'translate3d('+ (this.ulLeft + this.moveX) +'px,0,0)'
      }
    }
  }),
  //方法函数
  methods: Object.assign(mapActions([
      'requestBanner',
    ]),{
    //执行轮播
    startCarousel(){
      this.timer = setInterval(() => {
          this.showRight();
      },bannerConfig.interval);
    },
    //点击开始的,关闭轮播计时器
    handlerTstart(e){
      this.touchTime = new Date();
      this.startX = e.targetTouches[0].clientX;
      clearInterval(this.timer);
    },
    //计算移动距离
    handlerTmove(e){
      this.moveX = e.targetTouches[0].clientX - this.startX;
      this.touchSwitch = true;
    },
    //处理松开手指的事件,若点击事件小于200ms 则进入连接,大于则进行排算,若挪动距离超过半个视窗宽度则位移轮播,不然则退回
    handlerTend(e){
      if(new Date() - this.touchTime < 200){
        alert(`连接至${baseUrl}\/#\/campaign\/${this.getBanner[this.tabIndex].link}`)
      }else{
        let _x = this.moveX;
        this.moveX = 0;
        this.touchSwitch = false;
        if(Math.abs(_x) < this.clientWidth/2) return;
        _x > 0?this.showLeft():this.showRight();
        this.startCarousel();
      }
    },
    //向右跑,显示左边的bannner
    showLeft(){
      this.showIndex--;
        this.tabIndex--;
        if(this.tabIndex === -1){
          this.tabIndex = this.getBanner.length - 1;
          setTimeout(() => {
              this.touchSwitch = true;
              this.showIndex = this.getBanner.length;
          },500)
        }
    },
    //向右跑,显示右边的bannner
    showRight(){
      this.showIndex ++;
      this.tabIndex ++;
      if(this.tabIndex === this.getBanner.length){
        this.tabIndex = 0;
        setTimeout(() => {
          this.touchSwitch = true;
          this.showIndex = 1;
          setTimeout(() => {
            this.touchSwitch = false;
          },100)
        },500)
      }
    },
  }),
}
</script>
<style scoped lang='less'>
@tab-width : 10px;
.hp-carousel{
  position:relative;
  width:100%;
  overflow:hidden;
  .carousel-perviewer{
    display:flex;
    z-index:1;
    overflow:hidden;
    &.active{
      transition:transform .5s;
    }
    li{
      flex:1;
      float:left;
      img{
        display:block;
        width:100%;
      }
    }
  }
  .carousel-tab{
    position:absolute;
    width:100%;
    height:@tab-width;
    text-align:center;
    bottom:10px;
    z-index:2;
    li{
      display:inline-block;
      width:@tab-width;
      height:@tab-width;
      vertical-align:top;
      border-radius:50%;
      background-color:rgba(255,255,255,.6);
      &:not(:first-child){
        margin-left:12px;
      }
      &.active{
        background-color:#fff;
      };
    }
  }
}



</style>
