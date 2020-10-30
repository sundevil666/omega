<template>
  <main>
    <div class="container">
      <div class="news-box">
        <ul
            v-if="itemNews.length > 0"
            class="flex"
        >
          <li
              v-for="item in itemNews"
              :key="item.id"
          >
            <div
                class="wrapper"
                :class="item.open ? 'open' : ''"
            >
              <img :src="'http://test-fullstack/wp-content/uploads/' + item.img" alt="f1">
              <div class="title">{{ item.title }}</div>
              <div class="text-wrap">
                <div class="text">{{ item.text }}</div>
                <div
                    class="show-more"
                    @click="item.open = !item.open"
                >
                  Show more</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  name: "Content.vue",
  data() {
    return {
      itemNews: [
        {
          id: 1,
          img: 'f1.png',
          title: 'Kym Marsh, 42, becomes a grandmother for the first time as daughter Emilie Mae',
          text: 'Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur  adipisicing elit. Accusantium, dolores ea ipsa magnam molestias placeat rerum soluta? Aliquam, cumque mollitia.',
          open: false,
        },
        {
          id: 2,
          img: 'f1.png',
          title: 'Kym Marsh, 42, becomes a grandmother for the first time as daughter Emilie Mae',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, dolores ea ipsa magnam molestias placeat rerum soluta? Aliquam, cumque mollitia.',
          open: false,
        },
        {
          id: 3,
          img: 'f1.png',
          title: 'Kym Marsh, 42, becomes a grandmother for the first time as daughter Emilie Mae',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, dolores ea ipsa magnam molestias placeat rerum soluta? Aliquam, cumque mollitia.',
          open: false,
        },
        {
          id: 4,
          img: 'f1.png',
          title: 'Kym Marsh, 42, becomes a grandmother for the first time as daughter Emilie Mae',
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, dolores ea ipsa magnam molestias placeat rerum soluta? Aliquam, cumque mollitia.',
          open: false,
        }
      ]
    }
  },
}
</script>
