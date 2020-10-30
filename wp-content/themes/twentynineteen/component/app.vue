<template>
  <div class="grid main-page">
    <my-header/>
    <myContent/>
    <my-footer />
  </div>
</template>

<script>
import myHeader from './header/Header'
import myContent from './main/Content'
import myFooter from './footer/Footer'

export default {
  name: 'app',
  components: {
    myHeader,
    myContent,
    myFooter,
  },
}
</script>

<style>

</style>
