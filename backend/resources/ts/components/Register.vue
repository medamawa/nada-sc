<template>
<div class="wrap">
<form  @submit.prevent="register()">
	<div>
		<label for="name">user name</label>
		<input id="name" name="name" type="text" required v-model="name">
	</div>
	<div>
		<label for="pass">pass</label>
		<input id="pass" name="pass" type="password" required v-model="pass">
	</div>
	<div>
		<label for="pass_confirm">pass_confirm</label>
		<input id="pass_confirm" name="pass_confirm" type="password" required v-model="pass_confirm">
	</div>
	<button type="submit">register</button>
</form>
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
		register: function(){
			const form = document.querySelector("form");
			const element = document.getElementById("pass");
			axios.post('/register', {
				user_name: "test",
				name: "test",
				password: "password",
				role: 1,
				email: "test@gmail.com",
			})
			.then(res => {
				axios.post('/login', {
					user_name: "test",
					name: "test",
					password: "password",
					role: 1,
					email: "test@gmail.com",
				})
			});
		}
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";
</style>
