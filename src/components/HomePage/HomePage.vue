<template>
  <div class="homePage">
    <HompageNav></HompageNav>
    <main class='hp-body'>
      <Carousel></Carousel>
      <Column></Column>
      <Projects></Projects>
    </main>
  </div>
</template>

<script>
import HompageNav from './HompageNav'
import Carousel from './HompageCarousel'
import Column from './HompageColumn'
import Projects from './HompageProjects'
export default {
  components: {
    HompageNav,
    Carousel,
    Column,
    Projects
  }
}
</script>
<style scoped lang='less'>
.homePage{
  width:100%;
  height:100%;
}
.hp-body{
  width:100%;
  height:100%;
}
</style>
