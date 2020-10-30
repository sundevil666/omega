<template>
  <header>
    <div class="container flex justify-between">
      <div class="logo"><a href="/"><img src="../../img/logo.svg" alt="logo"></a></div>
      <nav>
        <ul class="flex justify-between align-center">
          <li
              v-for="(nav, i) in navs"
              :key="i"
          >
            <a :href="nav.url">{{ nav.title }}</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="container">
      <div class="header-box">
        <div class="title">Workforce Survey</div>
        <div class="cont">
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
        </div>
        <div class="bord-decor"><a class="btn" href="#">Start Now</a></div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header.vue",
  data() {
    return {
      navs: [
        {id: 1, title: 'What we do', url: '#'},
        {id: 1, title: 'Our work', url: '#'},
        {id: 1, title: 'seo insights', url: '#'},
        {id: 1, title: 'About us', url: '#'},
      ]
    }
  }
}
</script>

<style>

</style>