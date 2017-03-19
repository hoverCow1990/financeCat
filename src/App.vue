<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
import './assets/css/reset.css'

export default {
  name: 'app'
}
</script>

<style>
html,body,#app{
  width:100%;
  height:100%;
}
html{
  position:relative;
  font-size:625%;
  font-family: 'Microsoft YaHei','Source Sans Pro','Helvetica Neue', Arial, sans-serif;
  max-width: 435px;
  overflow-x: hidden;
}
body{
  background-color:#f2f2f2;
}
nav{
  height:50px;
  background-color:#f2f2f2;
}
.jyCat-container{
  width:92%;
  margin-left:auto;
  margin-right:auto;  
}
@media screen and (min-width:500px){
  html{
    width:435px;
    height:736px;
    margin:0px auto;
  }
}

@media screen and (max-width:375px){
  html{
   font-size:566%;
  }
}

@media screen and (max-width:320px){
  html{
   font-size:483%;
  }
}

@media screen and (max-width:300px){
  html{
   font-size:452%;
  }
}
</style>
