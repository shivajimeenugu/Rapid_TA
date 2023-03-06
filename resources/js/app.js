require('./bootstrap');

import pincode from "pincode-distance";
const Pincode = new pincode();
const distance = Pincode.getDistance("521235", "520001");
console.log(distance);
// Vue.component('example', require('./components/Example.vue'));

