/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

Vue.component('massage', require('./components/massage.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',


  data:{

	massage:'',

	chat:{

		massage:[]
	}

   },
  
  methods:{

	send(){
       if(this.massage.length != 0){
       this.chat.massage.push(this.massage); 
      
      axios.post('/send', {
          massage: this.massage 
                                  })

         .then(response => {
          console.log(response);
          this.massage= ''
                                       })

           .catch(error=> {
            console.log(error);
  });
       }
		
	}
},
mounted(){

	Echo.Private('chat')
    .listen('ChatEvent', (e) => {
        console.log(e);
    });
}

});