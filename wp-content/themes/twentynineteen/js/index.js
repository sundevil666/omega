import Vue from 'vue'
import * as JQuery from "jquery";
window.$ = JQuery.default;

import App from "../component/app";

new Vue({
  el: "#app",
  render: h => h(App)
});
