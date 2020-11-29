<template>
<div class="wrap">
	<div>
		<label for="name">user name</label>
		<input id="name" name="name" type="text" required v-model="name">
	</div>
	<div>
		<label for="pass">pass</label>
		<input id="pass" name="pass" type="password" required v-model="pass">
	</div>
	<button @click="login()">login</button>
	<button @click="logout()">logout</button>
</div>
</template>

<script>
import axios from "axios"

export default{
	data(){
		return {
			name: "",
			pass: "",
			pass_confirm: ""
		}
	},
	methods: {
		login: function(){
			axios.post('/login', {
				user_name: this.name,
				password: this.pass,
			})
			.then(res => {
				console.log(res);
			});
		},
		logout: function(){
			axios.post('/logout', {
			})
			.then(res => {
				console.log(res);
			});
		}
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";
</style>
